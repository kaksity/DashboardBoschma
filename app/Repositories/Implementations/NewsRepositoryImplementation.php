<?php

namespace App\Repositories\Implementations;

use App\Models\News;
use App\Repositories\Interfaces\NewsRepositoryInterface;

class NewsRepositoryImplementation implements NewsRepositoryInterface
{
    public function __construct(private News $news)
    {}

    public function createNewsRecord($data)
    {
        return $this->news->create($data);
    }
    
    public function getNewsFiltered($getNewsFilterOptions)
    {
        $perPage = $getNewsFilterOptions['per_page'] ?? 100;
        return $this->news->orderBy('created_at', 'DESC')->paginate($perPage);
    }

    public function getNewsById($id)
    {
        return $this->news->where([
            'id' => $id
        ])->first();
    }
    public function deleteNewsRecord($deleteNewsRecordPayloadOptions)
    {
        $entityId = $deleteNewsRecordPayloadOptions['entity_id'];
        $this->news->where([
            'id' => $entityId
        ])->delete();
    }

    public function updateNewsRecord($updateNewsRecordPayloadOptions)
    {
        $entityId = $updateNewsRecordPayloadOptions['entity_id'];
        $data = $updateNewsRecordPayloadOptions['data'];
        $this->news->where([
            'id' => $entityId
        ])->update($data);
    }
}
