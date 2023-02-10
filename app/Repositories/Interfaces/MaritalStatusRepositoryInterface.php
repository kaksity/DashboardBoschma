<?php

namespace App\Repositories\Interfaces;

interface MaritalStatusRepositoryInterface
{
    public function createMaritalStatusRecord($data);
    public function getMaritalStatuses();
    public function getMaritalStatusById($id);
    public function updateMaritalStatusRecord($updateMaritalStatusRecordPayloadOptions);
    public function deleteMaritalStatusRecord($deleteMaritalStatusRecordPayloadOptions);
}
