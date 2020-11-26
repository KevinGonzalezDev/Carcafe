<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function welcome(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function we(){
        return view('we');
    }

    public function ourTeam(){
        return view('ourTeam');
    }

    public function ourContribution(){
        return view('ourContribution');
    }
}
