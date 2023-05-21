<?php

namespace App\Services;

use App\Models\Organization;

class OrganizationService
{
    public function viewOrganizations()
    {
        $organizations = Organization::withCount('job')->get();
        return $organizations;
    }

    public function storeOrganization($validated)
    {
        $data = Organization::create($validated);
        return $data;
    }

    public function editOrganization($validatedOrganization, $id)
    {
        $id->update($validatedOrganization);
    }
    
    public function deleteOrganization($organization)
    {    
        $organization->destroy($organization->id);
    }
}
