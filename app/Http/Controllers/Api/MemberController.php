// app/Http/Controllers/Api/MemberController.php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MemberResource;
use App\Repositories\Contracts\MemberRepositoryInterface;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    protected $memberRepository;

    public function __construct(MemberRepositoryInterface $memberRepository)
    {
        $this->memberRepository = $memberRepository;
    }

    /**
     * Get all members for an organization with filters
     * 
     * @param Request $request
     * @param string $organizationId
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request, $organizationId)
    {
        // Build filters from request
        $filters = [
            'role' => $request->input('role', 'all'),
            'status' => $request->input('status', 'all'),
            'department' => $request->input('department', 'all'),
            'year_level' => $request->input('year_level', 'all'),
            'search' => $request->input('search', ''),
        ];

        // Get members with filters
        $members = $this->memberRepository->getByOrganization($organizationId, $filters);

        return response()->json([
            'success' => true,
            'data' => MemberResource::collection($members),
            'meta' => [
                'total' => $members->count(),
                'filters_applied' => array_filter($filters, function($value) {
                    return $value !== 'all' && $value !== '';
                }),
            ]
        ]);
    }

    /**
     * Get available filter options
     * 
     * @param string $organizationId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getFilterOptions($organizationId)
    {
        return response()->json([
            'success' => true,
            'data' => [
                'roles' => [
                    ['value' => 'all', 'label' => 'All Roles'],
                    ['value' => 'president', 'label' => 'President'],
                    ['value' => 'officer', 'label' => 'Officer'],
                    ['value' => 'volunteer', 'label' => 'Volunteer'],
                    ['value' => 'member', 'label' => 'Member'],
                ],
                'statuses' => [
                    ['value' => 'all', 'label' => 'All Statuses'],
                    ['value' => 'active', 'label' => 'Active'],
                    ['value' => 'inactive', 'label' => 'Inactive'],
                    ['value' => 'alumni', 'label' => 'Alumni'],
                    ['value' => 'pending', 'label' => 'Pending'],
                ],
                'departments' => $this->getDepartments($organizationId),
                'year_levels' => [
                    ['value' => 'all', 'label' => 'All Year Levels'],
                    ['value' => '1st', 'label' => '1st Year'],
                    ['value' => '2nd', 'label' => '2nd Year'],
                    ['value' => '3rd', 'label' => '3rd Year'],
                    ['value' => '4th', 'label' => '4th Year'],
                    ['value' => 'alumni', 'label' => 'Alumni'],
                ],
            ]
        ]);
    }

    private function getDepartments($organizationId)
    {
        $departments = \App\Models\OrganizationMember::where('organization_id', $organizationId)
            ->distinct()
            ->pluck('department')
            ->filter()
            ->values();

        $options = [['value' => 'all', 'label' => 'All Departments']];
        
        foreach ($departments as $dept) {
            $options[] = ['value' => $dept, 'label' => $dept];
        }

        return $options;
    }
}