<?php

namespace App\Http\Controllers\WebApp;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\News\CreateNewsRequest;
use App\Http\Requests\Web\News\EditNewsRequest;
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

    public function edit($id)
    {
        $news = $this->newsRepositoryInterface->getNewsById($id);

        if (is_null($news)) {
            return redirect()->route('webapp.news.index');
        }

        return view('webapp.news.edit',[
            'news' => $news
        ]);
    }
    public function update(EditNewsRequest $request, $id)
    {
        $news = $this->newsRepositoryInterface->getNewsById($id);

        if (is_null($news)) {
            return redirect()->route('webapp.news.index');
        }

        $updateNewsRecordOptions['entity_id'] = $id;
        $updateNewsRecordOptions['data'] = [
            'title' => $request->title,
            'is_published' => $request->is_published === 'on' ? true : false,
            'content' => $request->content,
        ];

        $this->newsRepositoryInterface->updateNewsRecord($updateNewsRecordOptions);

        return back()->with('success', 'News record was updated successfully');
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

    public function destroy($id)
    {
        $news = $this->newsRepositoryInterface->getNewsById($id);

        if (is_null($news)) {
            return redirect()->route('webapp.news.index');
        }

        $deleteNewsRecordOptions['entity_id'] = $id;

        $this->newsRepositoryInterface->deleteNewsRecord($deleteNewsRecordOptions);

        return redirect()->route('webapp.news.index');
    }
}
