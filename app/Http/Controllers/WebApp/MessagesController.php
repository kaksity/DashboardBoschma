<?php

namespace App\Http\Controllers\WebApp;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Messages\ListMessagesRequest;
use App\Repositories\Interfaces\MessageRepositoryInterface;

class MessagesController extends Controller
{
    public function __construct(
        private MessageRepositoryInterface $messageRepositoryInterface
    )
    {}

    public function index(ListMessagesRequest $request)
    {
        $messages = $this->messageRepositoryInterface->getMessagesFiltered($request->safe()->all());

        return view('webapp.messages.index', [
            'messages' => $messages
        ]);
    }

    public function show($id)
    {
        $message = $this->messageRepositoryInterface->getMessageById($id);
        if (is_null($message)) {
            return redirect()->route('webapp.dashboards.index');
        }

        return view('webapp.messages.detail', [
            'message' => $message
        ]);
    }
}
