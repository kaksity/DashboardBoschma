<?php

namespace App\Repositories\Interfaces;

interface LgaRepositoryInterface
{
    public function createLgaRecord($data);
    public function getLgas();
    public function getLgaById($id);
    public function updateLgaRecord($updateLgaRecordPayloadOptions);
    public function deleteLgaRecord($deleteLgaRecordPayloadOptions);
}
