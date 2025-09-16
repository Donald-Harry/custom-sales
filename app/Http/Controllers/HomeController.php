<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $info = [
        'site_name' => 'GSA Autions',
        'site_number' => '898989808',
        'site_email' => 'support@gsaautions.com',

    ];
    public function index(){
        // redirect, view, response,

        return view('index', ['info' => $this->info]); 
    }

    public function about(){
        return view('about', ['info' => $this->info]);
    }

    
}
