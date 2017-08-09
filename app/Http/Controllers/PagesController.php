<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    $title = (object) [
        "index" => "Welcome to my blog",
        "about" => "About",
        "service" => "Service"
    ];

    // echo json_encode($obj);

    public function index() {
        // return resources/views/pages/index.blade.php
        return view('pages.index')->with('title', $title->index); 
    }

    public function about() {
        // return resources/views/pages/about.blade.php
        return view('pages.about'); 
    }

    public function services() {
        // return resources/views/pages/about.blade.php
        return view('pages.services'); 
    }
}
