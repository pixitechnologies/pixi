<?php

namespace PixiTechnologies\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');

    }

    public function contact(){
        return view('pages.contact');
    }

    public function projects(){
        return view('pages.projects
       ');
    }
}
