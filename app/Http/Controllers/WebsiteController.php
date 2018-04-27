<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Website;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getWebsites = Website::join('users', 'users.id', '=', 'websites.user_id')
        ->select('websites.id', 'website_name', 'website_image', 'website_address', 'name')
        ->paginate(10);
        return view('admin.pages.website.view', compact('getWebsites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.website.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'website_image' => 'required|mimes:jpeg,png|max:1000',
        ]);

        //Add Website image
        $image = $request->file('website_image');
        $imageName = uniqid() . $image->getClientOriginalExtension();
        $destinationPath = public_path('/images/websites');

        $thumb_img = Image::make($image->getRealPath())->resize(360, 190)->save($destinationPath.'/'.$imageName);

        $store = $request->all();
        $store['website_image'] = $imageName;
        Website::create($store);

        return redirect()->back()->with('success_status', 'Website Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getWebsite = Website::findOrFail($id);
        return view('admin.pages.website.edit', compact('getWebsite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $getWebsite = Website::findOrFail($id);

        $name = $request->input('website_name');
        $address = $request->input('website_address');

        $getWebsite->update(['website_name'=>$name, 'website_address'=>$address, 'user_id'=>Auth::user()->id]);
        return redirect('/website')->with('success_status', 'Website with Id Number ' .$id. ' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Website::destroy($id);
        return redirect('/website')->with('failure_status', 'Website with Id Number ' .$id. ' Successfully Moved to Trash');
    }
}
