<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('uz/home');
    }
    public function news()
    {
        return view('uz/news');
    }
    public function greenArea()
    {
        return view('uz/greenArea');
    }
    public function xokimApparat()
    {
        return view('uz/xokimApparat');
    }
    public function sayorQabul()
    {
        return view('uz/sayorQabul');
    }
    public function boshqaruvApparat()
    {
        return view('uz/boshqaruvApparat');
    }
    public function kunTartibi()
    {
        return view('uz/kunTartibi');
    }
    public function xokimTadbir()
    {
        return view('uz/xokimTadbir');
    }
    public function boshIsh()
    {
        return view('uz/boshIsh ');
    }
    public function tenderElon()
    {
        return view('uz/tenderElon ');
    }
    public function tumanXaqida()
    {
        return view('uz/tumanXaqida');
    }
    public function tumanTashkilot()
    {
        return view('uz/tumanTashkilot ');
    }
    public function map()
    {
        return view('uz/map');
    }

    public function rasmiyMaruza()
    {
        return view('uz/rasmiyMaruza');
    }

    public function choraTadbir()
    {
        return view('uz/choraTadbir');
    }

    public function savolJavob()
    {
        return view('uz/savolJavob');
    }
    public function xokimIsh()
    {
        return view('uz/xokimIsh');
    }

    public function mahallaYigini()
    {
        return view('uz/mahallaYigini');
    }

    // public function enPage()
    // {
    //     return view('en/home');
    // }

    public function tumanXokim()
    {
        return view('uz/tumanXokimlig');
    }
    public function page()
    {
        return view('uz/page');
    }
}
