<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function shoesHome(){
    	return view('front.home');
    }

    public function shoesAbout(){
    	return view('front.about');
    }

    public function shoesBlog(){
        return view('front.blog');
    }

    public function shoesContact(){
        return view('front.contact');
    }
}


