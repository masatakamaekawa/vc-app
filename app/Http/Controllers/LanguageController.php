<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(){
    $languages = ['HTML', 'CSS', 'JavaScript','PHP','Ruby','python','swift'];
    return view('language.index', ['languages' => $languages]);
    }
}
