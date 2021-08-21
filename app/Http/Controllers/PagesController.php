<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home(){
        try {
            return view('home');
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function about(){
        try {
            return view('pages.about');
        } catch(\Exception $e){
            abort(400);
        }
    }

}
