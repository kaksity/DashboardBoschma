<?php

namespace App\Repositories\Implementations;

use App\Models\Ward;
use App\Repositories\Interfaces\WardRepositoryInterface;

class WardRepositoryImplementation implements WardRepositoryInterface
{
    public function __construct(private Ward $ward)
    {}

    public function createWardRecord($data)
    {
        return $this->ward->create($data);
    }
    public function getWards()
    {
        return $this->ward->orderBy('name')->get();
    }
    public function getWardById($id)
    {
        return $this->ward->where([
            'id' => $id
        ])->first();
    }
    public function updateWardRecord($updateWardRecordPayloadOptions)
    {
        $entityId = $updateWardRecordPayloadOptions['entity_id'];
        $data = $updateWardRecordPayloadOptions['data'];
        
        $this->ward->where([
            'id' => $entityId
        ])->update($data);
    }
    public function deleteWardRecord($deleteWardRecordPayloadOptions)
    {
        $entityId = $deleteWardRecordPayloadOptions['entity_id'];
        $this->ward->where([
            'id' => $entityId
        ])->delete();
    }
}
