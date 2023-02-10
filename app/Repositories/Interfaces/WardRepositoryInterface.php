<?php

namespace App\Repositories\Interfaces;

interface WardRepositoryInterface
{
    public function createWardRecord($data);
    public function getWards();
    public function getWardById($id);
    public function updateWardRecord($updateWardRecordPayloadOptions);
    public function deleteWardRecord($deleteWardRecordPayloadOptions);
}
