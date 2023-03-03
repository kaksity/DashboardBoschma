<?php

namespace App\Repositories\Interfaces;

interface NewsRepositoryInterface
{
    public function createNewsRecord($data);
    public function deleteNewsRecord($deleteNewsRecordOptions);
    public function updateNewsRecord($updateNewsRecordOptions);
    public function getNewsById($id);
    public function getNewsFiltered($getNewsFilterOptions);
}
