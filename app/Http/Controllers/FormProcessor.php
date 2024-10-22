<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    //
    public function index() {
        return view('add_user_form');

    }

    public function store(Request $request) {
        $userName = $request->name;
        return view('welcome', ['user_name' => $userName]);
    }
}
