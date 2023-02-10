<?php

namespace App\Repositories\Implementations;

use App\Models\Facility;
use App\Repositories\Interfaces\FacilityRepositoryInterface;

class FacilityRepositoryImplementation implements FacilityRepositoryInterface
{
    public function __construct(private Facility $facility)
    {}

    public function createFacilityRecord($data)
    {
        return $this->facility->create($data);
    }
    public function getFacilities()
    {
        return $this->facility->orderBy('name')->get();
    }
    public function getFacilityById($id)
    {
        return $this->facility->where([
            'id' => $id
        ])->first();
    }
    public function updateFacilityRecord($updateFacilityRecordPayloadOptions)
    {
        $entityId = $updateFacilityRecordPayloadOptions['entity_id'];
        $data = $updateFacilityRecordPayloadOptions['data'];
        
        $this->facility->where([
            'id' => $entityId
        ])->update($data);
    }
    public function deleteFacilityRecord($deleteFacilityRecordPayloadOptions)
    {
        $entityId = $deleteFacilityRecordPayloadOptions['entity_id'];
        $this->facility->where([
            'id' => $entityId
        ])->delete();
    }
}
