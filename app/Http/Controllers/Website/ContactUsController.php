<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Website\Messages\CreateMessageRequest;
use App\Repositories\Interfaces\MessageRepositoryInterface;

class ContactUsController extends Controller
{
    public function __construct(
        private MessageRepositoryInterface $messageRepositoryInterface
    )
    {}

    public function index()
    {
        return view('website.contact-us.index');
    }

    public function store(CreateMessageRequest $request)
    {
        $this->messageRepositoryInterface->createMessageRecord($request->safe()->all());
        return back()->with('success', 'Message has been sent to BOSCHMA successfully');
    }
}
