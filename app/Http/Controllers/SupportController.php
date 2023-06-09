<?php

namespace App\Http\Controllers;

use App\Models\socialmedia;
use App\Models\support;
use DragonCode\Support\Facades\Filesystem\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SupportController extends Controller
{
    public function viewSupport()
    {
        $support = support::first();
        $media = socialmedia::all();
        return view('support/index', [
            'support' => $support,
            'media' => $media,
        ]);
    }
    public function getSupport()
    {
        $media = socialmedia::all();
        $items = support::all();
        return view('adminportal.pages.support.index', [
            'items' => $items,
            'media' => $media,
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

    public function postSupportMedia(Request $request)
    {
        $image = $request->file('photo');
        $url = $request->get('mediaLink');

        if (stripos($url, "http://") === false && stripos($url, "https://") === false) {
            $url = "http://" . $url;
        }

        $request->validate([
            'mediaLink' => ['required'],
            'photo' => ['required']
        ]);

        $newItem = new socialmedia();

        $image = time() . $image->getClientOriginalName();

        $request->photo->move(public_path('img'), $image);
        $newItem->socialIconPath = $image;

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

    public function deleteMedia($id)
    {
        $image = socialmedia::find($id);

        if (!$image) {
            return response()->json(['message' => 'Image not found'], 404);
        }

        $filename = $image->socialIconPath;

        $image_path = "img/" . $filename;

        File::delete($image_path);

        $image->delete();

        return redirect('/admin/support');
    }
}
