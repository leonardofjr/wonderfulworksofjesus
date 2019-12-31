<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index() {
        return view('frontend.pages.home.index');
    }
    function know_christ() {
        return view('frontend.pages.know_christ.index');
    }
    function persecution_of_christians() {
        return view('frontend.pages.persecution_of_christians.index');
    }
    function donate() {
        return view('frontend.pages.donate.index');
    }
}
