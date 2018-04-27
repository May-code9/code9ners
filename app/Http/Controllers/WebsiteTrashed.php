<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;

class WebsiteTrashed extends Controller
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
      ->onlyTrashed()
      ->paginate(10);
      return view('admin.pages.website.trash.view', compact('getWebsites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
      $website = Website::withTrashed()->findOrFail($id)->restore();
      return redirect('/websiteTrash')->with("success_status", "Website with Id Number " .$id. " Successfully Restored");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Website::withTrashed()->findOrFail($id)->forceDelete();
        return redirect('/websiteTrash')->with("success_status", "Website with Id Number " .$id. " Successfully Deleted");
    }
}
