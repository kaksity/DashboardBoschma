<?php

namespace App\Repositories\Interfaces;

interface MessageRepositoryInterface
{
    public function createMessageRecord($data);
    public function deleteMessageRecord($deleteMessageRecordOptions);
    public function getMessageById($id);
    public function getMessagesFiltered($getMessageFilterOptions);
}
