<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteFeature;

class FeatureTrashed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $getFeatures = WebsiteFeature::join('users', 'users.id', '=', 'website_features.user_id')
      ->onlyTrashed()
      ->select('website_features.id', 'name', 'website_feature', 'dynamic', 'feature_cost')
      ->paginate(10);

      return view('admin.pages.siteFeature.trash.view', compact('getFeatures'));
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
      WebsiteFeature::onlyTrashed()->findOrFail($id)->restore();
      return redirect('/siteFeatureTrash')->with("success_status", "Feature with Id Number " .$id. " Successfully Restored");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      WebsiteFeature::withTrashed()->findOrFail($id)->forceDelete();
      return redirect('/siteFeatureTrash')->with("success_status", "Feature with Id Number " .$id. " Successfully Deleted");
    }
}
