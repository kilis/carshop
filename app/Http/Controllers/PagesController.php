<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Part;

class PagesController extends Controller
{

	public function getContact(){
        return view('pages.contact');
    }
	public function getParts(){
		$parts = Part::all();
        return view('pages.parts', ['parts' => $parts]);
    }
}