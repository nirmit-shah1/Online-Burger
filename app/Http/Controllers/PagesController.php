<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class PagesController extends Controller
{
    public function index()
    {
        return View::make('pages.index');
    }
    public function insertnew()
    {
        return View::make('pages.insertnew');
    }

    public function contact()
    {
        return view('pages.contact');
    }
    public function menu()
    {
        return view('pages.menu');
    }
    public function aboutus()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function about1()
    {
        return view('pages.about1');
    }
    public function loginback()
    {
        return view('pages.loginback');
    }
    
    public function login()
    {
        return view('pages.login');

    }
    
    public function admin()
    {
        return view('pages.admin');
    }
}
