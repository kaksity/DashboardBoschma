<?php

namespace App\Http\Controllers\WebApp;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\News\CreateNewsRequest;
use App\Http\Requests\Web\News\ListNewsRequest;
use App\Repositories\Interfaces\NewsRepositoryInterface;

class NewsController extends Controller
{
    public function __construct(
        private NewsRepositoryInterface $newsRepositoryInterface
    )
    {}
    

    public function index(ListNewsRequest $request)
    {
        $news = $this->newsRepositoryInterface->getNewsFiltered(
            $request->safe()->all()
        );
        return view('webapp.news.list', [
            'news' => $news
        ]);
    }
    public function create()
    {
        return view('webapp.news.create');
    }

    public function store(CreateNewsRequest $request)
    {
        $this->newsRepositoryInterface->createNewsRecord([
            'title' => $request->title,
            'is_published' => $request->is_published === 'on' ? true : false,
            'content' => $request->content,
        ]);

        return back()->with('success', 'News record was created successfully');
    }
}
