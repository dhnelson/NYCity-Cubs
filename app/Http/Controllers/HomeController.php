<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home() {
        return view('pages.home');
    }

    public function learning() {
        return view('pages.learning');
    }

    public function responsibilities_cost() {
        return view('pages.responsibilities_cost');
    }

    public function structure() {
        return view('pages.structure');
    }

    public function contact() {
        return view('pages.contact');
    }

}
