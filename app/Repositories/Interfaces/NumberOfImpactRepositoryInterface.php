<?php

namespace App\Repositories\Interfaces;

interface NumberOfImpactRepositoryInterface
{
    public function createNumberOfImpactRecord($data);
    public function getNumberOfImpacts();
    public function getNumberOfImpactById($id);
    public function updateNumberOfImpactRecord($updateNumberOfImpactRecordPayloadOptions);
    public function deleteNumberOfImpactRecord($deleteNumberOfImpactRecordPayloadOptions);
}
