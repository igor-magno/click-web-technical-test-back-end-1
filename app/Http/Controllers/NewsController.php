<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::paginate(5);
        return view('news.index', ['news' => $news]);
    }

    public function detail(News $news)
    {
        return view('news.detail', ['news' => $news]);
    }
}
