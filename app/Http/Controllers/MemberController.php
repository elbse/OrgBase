<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\OrganizationMember;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = OrganizationMember::with('user')->orderBy('created_at', 'desc')->get();
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:20',
            'role' => 'required|in:Admin,Member,Volunteer',
            'status' => 'required|in:Active,Inactive',
        ]);

        // Get or create a default organization
        $organization = Organization::first();
        if (!$organization) {
            $organization = Organization::create([]);
        }

        // Create user first
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt('password'), // Default password, should be changed
        ]);

        // Create organization member
        OrganizationMember::create([
            'user_id' => $user->id,
            'organization_id' => $organization->id,
            'role' => $validated['role'],
            'status' => $validated['status'],
            'phone' => $validated['phone'] ?? null,
        ]);

        return redirect()->route('members.index')->with('success', 'Member added successfully!');
    }
}

