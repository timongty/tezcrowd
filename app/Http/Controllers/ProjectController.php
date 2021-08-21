<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function showAll(){
        try {
            return view('projects.show_all_projects');
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function show(){
        try {
            return view('projects.show_project');
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function create(){
        try {
            return view('projects.create_project');
        } catch(\Exception $e){
            abort(400);
        }
    }

}
