<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Http\Requests\OrganizationRequest;
use App\Http\Requests\OrganizationEditRequest;
use App\Models\Job;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = Organization::withCount('job')->get();
        return view('Organization.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Organization.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrganizationRequest $request)
    {
        $validated = $request-> validated();
        Organization::create($validated);
        return redirect()->route('organization.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization)
    {
        return view('Organization.edit',compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrganizationEditRequest $request, Organization $organization)
    {
        $validatedorganization = $request-> validated();
        $organization->update($validatedorganization);
        return redirect()->route('organization.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
