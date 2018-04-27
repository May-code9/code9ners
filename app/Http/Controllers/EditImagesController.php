<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;
use Image;

class EditImagesController extends Controller
{
    public function website($id)
    {
      $getWebsite = Website::findOrFail($id);
      return view('admin.pages.website.editImage', compact('getWebsite'));
    }
    public function post_website(Request $request, $id)
    {
      $request->validate([
        'website_image' => 'required|mimes:jpeg,png|max:1000',
      ]);

      //Add Website image
      $image = $request->file('website_image');
      $imageName = uniqid() . $image->getClientOriginalExtension();
      $destinationPath = public_path('/images/websites');

      $thumb_img = Image::make($image->getRealPath())->resize(360, 190)->save($destinationPath.'/'.$imageName);

      $user_id = $request->input('user_id');
      $updateImage = Website::findOrFail($id);
      $updateImage->update(['website_image'=>$imageName, 'user_id'=>$user_id]);
      return redirect('/website')->with("success_status", "Website Image Updated");
    }
}
