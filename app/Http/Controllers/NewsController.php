<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getNews()
    {
        $items = news::all();
        return view('adminportal.pages.news.index', [
            'items' => $items,
        ]);
    }
}
