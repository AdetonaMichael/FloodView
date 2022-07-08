<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $firstname, $lastname,$profpix, $about, $phone, $language, $occupation;
    use WithFileUploads;

    public function render()
    {
        $user = Auth::user();
        return view('livewire.profile', compact('user'));
    }
    public function update(){
        $this->validate([
            'profpix'=>'image|max:1024',
        ]);
        $user_record = User::find(Auth::user()->id);
        $user_record->update([
         'firstname'=>$this->firstname,
         'lastname'=>$this->lastname,
         'about' => $this->about,
         'phone'=> $this->phone,
         'profpix'=>$this->profpix->store('profpix'),
         'language'=>$this->language,
         'occupation'=>$this->occupation,
        ]);

        session()->flash('success', 'Information updated Successfully...');
    }
}
