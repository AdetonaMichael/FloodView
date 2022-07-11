<?php

namespace App\Http\Controllers;

use App\Classes\MyMailClass;
use App\Mail\NewFloodReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function __construct()
    {
       $this->middleware(['auth','verified']);
    }
    public function index(){
        return view('welcome');
    }

}
