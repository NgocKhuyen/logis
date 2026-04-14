<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('client.pages.home');
    }

    public function about() {
        return view('client.pages.about');
    }

    public function contact() {
        return view('client.pages.contact');
    }
}
