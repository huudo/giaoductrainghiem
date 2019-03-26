<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public function changeLang($lang){
    	Session::put('website_language', $lang);

    	return redirect()->back();
    }
}
