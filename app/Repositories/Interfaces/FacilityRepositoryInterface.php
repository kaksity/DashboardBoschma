<?php

namespace App\Repositories\Interfaces;

interface FacilityRepositoryInterface
{
    public function createFacilityRecord($data);
    public function getFacilities();
    public function getFacilityById($id);
    public function updateFacilityRecord($updateFacilityRecordPayloadOptions);
    public function deleteFacilityRecord($deleteFacilityRecordPayloadOptions);
}
