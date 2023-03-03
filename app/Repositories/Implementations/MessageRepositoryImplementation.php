<?php

namespace App\Repositories\Implementations;

use App\Models\Message;
use App\Repositories\Interfaces\MessageRepositoryInterface;

class MessageRepositoryImplementation implements MessageRepositoryInterface
{
    public function __construct(private Message $message)
    {}

    public function createMessageRecord($data)
    {
        return $this->message->create($data);
    }
    
    public function getMessagesFiltered($getMessageFilterOptions)
    {
        $perPage = $getMessageFilterOptions['per_page'] ?? 100;
        return $this->message->orderBy('created_at', 'DESC')->paginate($perPage);
    }

    public function getMessageById($id)
    {
        return $this->message->where([
            'id' => $id
        ])->first();
    }
    public function deleteMessageRecord($deleteMessageRecordPayloadOptions)
    {
        $entityId = $deleteMessageRecordPayloadOptions['entity_id'];
        $this->message->where([
            'id' => $entityId
        ])->delete();
    }
}
