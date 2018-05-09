<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;
use App\WebsiteCategory;
use App\WebsiteFeature;

class PublicController extends Controller
{
    public function index() {
      $websites = Website::get();
      return view('layouts.body.index', compact('websites'));
    }
    public function quote()
    {
      $getCategories = WebsiteCategory::orderBy('website_category')->get();
      $getFeatures = WebsiteFeature::get();

      return view('layouts.body.quote', compact('getCategories', 'getFeatures'));
    }
    public function post_quote(Request $request)
    {
      dd($request->all());
    }
}
