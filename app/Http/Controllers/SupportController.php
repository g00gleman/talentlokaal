<?php

namespace App\Http\Controllers;

use App\Models\support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function getSupport()
    {
        $items = support::all();
        return view('adminportal.pages.support.index', [
            'items' => $items,
        ]);
    }

    public function getEdit($id)
    {
        $oldNews = support::find($id);
        return view('adminportal.pages.support.edit', [
            'oldNews' => $oldNews
        ]);
    }

    public function putEdit(Request $request, $id)
    {
        $text = $request->get('text');
        $email = $request->get('email');
        $phonenumber = $request->get('phonenumber');
        $website = $request->get('website');

        $request->validate([
            'text' => ['required'],
            'email' => ['required'],
            'phonenumber' => ['required'],
            'website' => ['required'],
        ]);

        $updateItem = support::find($id);
        $updateItem->text = $text;
        $updateItem->email = $email;
        $updateItem->phonenumber = $phonenumber;
        $updateItem->website = $website;
        $updateItem->save();

        return redirect('/admin/support');
    }
}
