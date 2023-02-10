<?php

namespace App\Repositories\Implementations;

use App\Models\MaritalStatus;
use App\Repositories\Interfaces\MaritalStatusRepositoryInterface;

class MaritalStatusRepositoryImplementation implements MaritalStatusRepositoryInterface
{
    public function __construct(private MaritalStatus $maritalStatus)
    {}

    public function createMaritalStatusRecord($data)
    {
        return $this->maritalStatus->create($data);
    }
    public function getMaritalStatuses()
    {
        return $this->maritalStatus->orderBy('name')->get();
    }
    public function getMaritalStatusById($id)
    {
        return $this->maritalStatus->where([
            'id' => $id
        ])->first();
    }
    public function updateMaritalStatusRecord($updateMaritalStatusRecordPayloadOptions)
    {
        $entityId = $updateMaritalStatusRecordPayloadOptions['entity_id'];
        $data = $updateMaritalStatusRecordPayloadOptions['data'];
        
        $this->maritalStatus->where([
            'id' => $entityId
        ])->update($data);
    }
    public function deleteMaritalStatusRecord($deleteMaritalStatusRecordPayloadOptions)
    {
        $entityId = $deleteMaritalStatusRecordPayloadOptions['entity_id'];
        $this->maritalStatus->where([
            'id' => $entityId
        ])->delete();
    }
}
