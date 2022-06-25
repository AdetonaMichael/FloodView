<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){
        /* Dynamic IP Address */
        // $ip_address = session('ipaddress');
        // $currentUserInfo = Location::get($ip_address);
        $currentUserInfo = Location::get('66.85.47.62');
        dd($currentUserInfo);
        // return view('detail', compact('currentUserInfo'));

    }
}
