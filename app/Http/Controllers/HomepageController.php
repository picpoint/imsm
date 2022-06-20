<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{

    public function index () {
        $title = 'IMSM';
        return view('index', compact('title'));
    }

}
