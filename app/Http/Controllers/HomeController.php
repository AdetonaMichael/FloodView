<?php

namespace App\Http\Controllers;

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

    public function sendMail(){
        $details = [
            'title'=>'New Flood Report From',
            'body'=>'Thi s is the body of the report'
        ];
        Mail::to('cyberlordroboto@gmail.com')->send(new NewFloodReport($details));
        echo "<h3>Mail Sent Successfully...!</h3>";
 }

}
