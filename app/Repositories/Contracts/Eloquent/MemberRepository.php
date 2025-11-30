<?php

public function getByOrganization($organizationId, array $filters = [])
{
    $query = $this->model->where('organization_id', $organizationId)
        ->with('user');

    // Role filter
    if (isset($filters['role']) && $filters['role'] !== 'all') {
        $query->where('role', $filters['role']);
    }

    // Status filter
    if (isset($filters['status']) && $filters['status'] !== 'all') {
        $query->where('status', $filters['status']);
    }

    // Department filter
    if (isset($filters['department']) && $filters['department'] !== 'all') {
        $query->where('department', $filters['department']);
    }

    // Year level filter
    if (isset($filters['year_level']) && $filters['year_level'] !== 'all') {
        $query->where('year_level', $filters['year_level']);
    }

    // Search query (name, email, student_id)
    if (isset($filters['search']) && !empty($filters['search'])) {
        $search = $filters['search'];
        $query->where(function($q) use ($search) {
            $q->whereHas('user', function($userQuery) use ($search) {
                $userQuery->where('full_name', 'LIKE', "%{$search}%")
                         ->orWhere('email', 'LIKE', "%{$search}%");
            })
            ->orWhere('student_id', 'LIKE', "%{$search}%");
        });
    }

    return $query->orderBy('created_at', 'desc')->get();
}

