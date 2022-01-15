<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCtrl extends Controller
{
    public function equipe(){
        return view('pages.equipe');
    }

    public function contacts(){
        return view('pages.contacts');
    }

    public function allArticles(){
        return view('pages.articles');
    }

    public function siteVitrine(){
        return view('pages.site-vitrine');
    }

    public function blog(){
        return view('pages.site-blog');
    }

    public function eCommerce(){
        return view('pages.site-e-commerce');
    }
}
