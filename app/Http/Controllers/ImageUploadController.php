<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageUploadController extends Controller
{
    public function index()
    {
        return view('image-upload',[
            'afbeelding' => Image::all(),
        ]);

        return view('time2share.show', [
            'product' => \App\Models\Product::find($id)
        ]);
    }
    public function upload(Request $request)
    {
        
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $name = $request->file('image')->getClientOriginalName();
        // $path = $request->file('image')->store('public/uploads');
        $path = $request->file('image')->move('./img', $name);
        $save = new Image;
        $save->name = $name;
        $save->path = $path;
        $save->save();
        return redirect('image')->with('status', 'Image Has been uploaded successfully with validation in laravel');
    }
}
