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

    public function getCreate()
    {
        return view('adminportal.pages.news.create');
    }

    public function postNews(Request $request)
    {
        $title = $request->get('title');
        $isImportant = $request->get('isImportant');
        $description = $request->get('description');

        if ($isImportant == true) {
            $isImportant = 1;
        } else {
            $isImportant = 0;
        }

        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
        ]);

        $newItem = new news();
        $newItem->title = $title;
        $newItem->isImportant = $isImportant;
        $newItem->description = $description;
        $newItem->save();

        return redirect('/admin/nieuws');
    }
}
