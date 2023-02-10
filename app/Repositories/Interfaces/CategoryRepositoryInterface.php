<?php

namespace App\Repositories\Interfaces;

interface CategoryRepositoryInterface
{
    public function createCategoryRecord($data);
    public function getCategories();
    public function getCategoryById($id);
    public function updateCategoryRecord($updateCategoryRecordPayloadOptions);
    public function deleteCategoryRecord($deleteCategoryRecordPayloadOptions);
}
