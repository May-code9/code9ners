<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteCategory;

class WebsiteCategoryController extends Controller
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
        ->paginate(10);
        return view('admin.pages.siteCategory.view', compact('getCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.siteCategory.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        WebsiteCategory::create($request->all());
        return redirect()->back()->with('success_status', 'Category Added');
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
        $getCategory = WebsiteCategory::findOrFail($id);
        return view('admin.pages.siteCategory.edit', compact('getCategory'));
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
        $name = $request->input('website_category');
        $getCategory = WebsiteCategory::findOrFail($id)->update($request->all());
        return redirect('/siteCategory')->with('success_status', 'Category with Id Number ' .$id. ' Updated Successfully to ' . $name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        WebsiteCategory::destroy($id);
        return back()->with('failure_status', 'Category with Id Number ' .$id. ' Successfully Moved to Trash');
    }
}
