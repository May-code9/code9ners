<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteCategory;

class WebsiteCategoryTrashed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $getCategories = WebsiteCategory::join('users', 'users.id', '=', 'website_categories.user_id')
      ->select('website_categories.id', 'name', 'website_category', 'dynamic', 'website_cost')
      ->onlyTrashed()
      ->paginate(10);
      return view('admin.pages.siteCategory.trash.view', compact('getCategories'));
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
      WebsiteCategory::onlyTrashed()->findOrFail($id)->restore();
      return redirect('/siteCategoryTrash')->with("success_status", "Category with Id Number " .$id. " Successfully Restored");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      WebsiteCategory::withTrashed()->findOrFail($id)->forceDelete();
      return redirect('/siteCategoryTrash')->with("success_status", "Category with Id Number " .$id. " Successfully Deleted");
    }
}
