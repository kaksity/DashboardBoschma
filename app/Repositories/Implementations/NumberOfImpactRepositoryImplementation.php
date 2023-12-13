<?php

namespace App\Repositories\Implementations;

use App\Models\NumberOfImpact;
use App\Repositories\Interfaces\NumberOfImpactRepositoryInterface;

class NumberOfImpactRepositoryImplementation implements NumberOfImpactRepositoryInterface
{
    public function __construct(private NumberOfImpact $numberOfImpact)
    {}

    public function createNumberOfImpactRecord($data)
    {
        return $this->numberOfImpact->create($data);
    }
    public function getNumberOfImpacts()
    {
        return $this->numberOfImpact->get();
    }
    public function getNumberOfImpactById($id)
    {
        return $this->numberOfImpact->where([
            'id' => $id
        ])->first();
    }
    public function updateNumberOfImpactRecord($updateNumberOfImpactRecordPayloadOptions)
    {
        $entityId = $updateNumberOfImpactRecordPayloadOptions['entity_id'];
        $data = $updateNumberOfImpactRecordPayloadOptions['data'];
        
        $this->numberOfImpact->where([
            'id' => $entityId
        ])->update($data);
    }
    public function deleteNumberOfImpactRecord($deleteNumberOfImpactRecordPayloadOptions)
    {
        $entityId = $deleteNumberOfImpactRecordPayloadOptions['entity_id'];
        $this->numberOfImpact->where([
            'id' => $entityId
        ])->delete();
    }
}
