<?php

namespace App\Http\Controllers;

use App\Models\support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function viewSupport(){
        $support = support::first();
        return view('support/index', [
            'support' => $support
        ]);
    }
    public function getSupport()
    {
        $items = support::all();
        return view('adminportal.pages.support.index', [
            'items' => $items,
        ]);
    }

    public function getCreate()
    {
        return view('adminportal.pages.support.create');
    }
    public function getCreateMedia()
    {
        return view('adminportal.pages.support.socialMedia.create');
    }

    public function postSupport(Request $request)
    {
        $text = $request->get('text');
        $email = $request->get('email');
        $phonenumber = $request->get('phonenumber');
        // $website = $request->get('website');
        $url = $request->get('website');

        if (stripos($url, "http://") === false && stripos($url, "https://") === false) {
            $url = "http://" . $url;
        }

        $request->validate([
            'text' => ['required'],
            'email' => ['required'],
            'phonenumber' => ['required'],
            'website' => ['required'],
        ]);

        $newItem = new support();
        $newItem->text = $text;
        $newItem->email = $email;
        $newItem->phonenumber = $phonenumber;
        $newItem->website = $url;
        $newItem->save();

        return redirect('/admin/support');
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
        // $website = $request->get('website');
        $url = $request->get('website');

        if (stripos($url, "http://") === false && stripos($url, "https://") === false) {
            $url = "http://" . $url;
        }

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
        $updateItem->website = $url;
        $updateItem->save();

        return redirect('/admin/support');
    }

    // public function delete($id)
    // {
    //     support::find($id)->delete();

    //     return redirect('/admin/support');
    // }
}
