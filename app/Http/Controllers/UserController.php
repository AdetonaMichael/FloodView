<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $reports = Report::all();
    return view('dashboard')->with('users', $users)->with('reports', $reports);
    }
}
