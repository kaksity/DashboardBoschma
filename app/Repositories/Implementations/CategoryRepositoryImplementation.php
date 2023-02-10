<?php

namespace App\Repositories\Implementations;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepositoryImplementation implements CategoryRepositoryInterface
{
    public function __construct(private Category $category)
    {}

    public function createCategoryRecord($data)
    {
        return $this->category->create($data);
    }
    public function getCategories()
    {
        return $this->category->orderBy('name')->get();
    }
    public function getCategoryById($id)
    {
        return $this->category->where([
            'id' => $id
        ])->first();
    }
    public function updateCategoryRecord($updateCategoryRecordPayloadOptions)
    {
        $entityId = $updateCategoryRecordPayloadOptions['entity_id'];
        $data = $updateCategoryRecordPayloadOptions['data'];
        
        $this->category->where([
            'id' => $entityId
        ])->update($data);
    }
    public function deleteCategoryRecord($deleteCategoryRecordPayloadOptions)
    {
        $entityId = $deleteCategoryRecordPayloadOptions['entity_id'];
        $this->category->where([
            'id' => $entityId
        ])->delete();
    }
}
