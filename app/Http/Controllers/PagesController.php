<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	public function index()
    {
       return view('pages.contact');
    }
    public function getTest(){
        return view('pages.test');
    }
	public function getContact(){
        return view('pages.contact');
    }
}