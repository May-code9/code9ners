<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;

class PublicController extends Controller
{
    public function index() {
      $websites = Website::get();
      return view('layouts.body.index', compact('websites'));
    }
}
