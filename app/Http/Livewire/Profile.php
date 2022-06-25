<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $firstname, $lastname,$profpix, $about, $phone, $language, $occupation;
    public function render()
    {
        return view('livewire.profile');
    }
}
