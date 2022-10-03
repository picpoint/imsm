<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LkController extends Controller
{

    public function index() {
        $title = "Регистрация / Авторизация";
        return view('lk', compact('title'));
    }

}
