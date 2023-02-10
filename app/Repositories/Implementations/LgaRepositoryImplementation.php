<?php

namespace App\Repositories\Implementations;

use App\Models\Lga;
use App\Repositories\Interfaces\LgaRepositoryInterface;

class LgaRepositoryImplementation implements LgaRepositoryInterface
{
    public function __construct(private Lga $lga)
    {}

    public function createLgaRecord($data)
    {
        return $this->lga->create($data);
    }
    public function getLgas()
    {
        return $this->lga->orderBy('name')->get();
    }
    public function getLgaById($id)
    {
        return $this->lga->where([
            'id' => $id
        ])->first();
    }
    public function updateLgaRecord($updateLgaRecordPayloadOptions)
    {
        $entityId = $updateLgaRecordPayloadOptions['entity_id'];
        $data = $updateLgaRecordPayloadOptions['data'];
        
        $this->lga->where([
            'id' => $entityId
        ])->update($data);
    }
    public function deleteLgaRecord($deleteLgaRecordPayloadOptions)
    {
        $entityId = $deleteLgaRecordPayloadOptions['entity_id'];
        $this->lga->where([
            'id' => $entityId
        ])->delete();
    }
}
