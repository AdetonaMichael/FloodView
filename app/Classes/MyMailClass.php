<?php

namespace App\Classes;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewFloodReport;

class MyMailClass{
    public function kill(){
        return "You have been killed!!!";
    }

    public function sendMail($details){
        Mail::to('alextosin31@gmail.com')->send(new NewFloodReport($details));
        session()->flash('success', "Report Mail Sent Successfully...!");
 }
}
