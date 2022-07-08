<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use Stevebauman\Location\Facades\Location;
use Livewire\WithFileUploads;
use App\Models\Report;
use App\Achievements\CreatedFirstReport;
use App\Achievements\CreatedReport;
use Illuminate\Support\Facades\Auth;

class CreateReport extends ModalComponent
{
    public $clientIP="";
    public $clientLocation = "";
    public $street, $state, $city, $zipcode, $lga, $loss_of_life, $description;
    public $images = [];
    public $other_damages;
    use WithFileUploads;


    public function render()
    {

        return view('livewire.create-report');
    }
    private function resetInput(){
        $this->street = "";
        $this->state  = "";
        $this->city   = "";
        $this->zipcode = "";
        $this->lga    = "";
        $this->loss_of_life = "";
        $this->other_damages = "";
        $this->description = "";
        $this->images = [];
    }
    public function mount(){
        $this->getIP();
    }
    public function storeReport(){
         $data = $this->validate([
            'street'=>'required',
            'state'=>'required',
            'city'=>'required',
            'lga'=>'required',
            'zipcode'=>'numeric',
            'loss_of_life'=>'numeric',
            'description'=>'string',
        ]);
        foreach($this->images as $key=>$image){
            $this->images[$key] = $image->store('reports');
        }
        $this->images = json_encode($this->images);
        array_push($data, $this->images);


       Report::create([
           'street'=>$data['street'],
           'state'=>$data['state'],
           'location'=>$this->clientLocation,
           'city'=>$data['city'],
           'lga'=>$data['lga'],
           'zipcode'=>$data['zipcode'],
           'other_damages'=>implode(",",$this->other_damages),
           'loss_of_life'=>$data['loss_of_life'],
           'description'=>$data['description'],
           'images'=>$this->images,

       ]);

       $user = Auth::user();
       $user->unlock(new CreatedReport());
            // $this->images->store('report_image');
        $this->resetInput();
        session()->flash('success', 'Resport Submitted Successfully...!!');

    //    Report::create($data);

    }
    public static function modalMaxWidth(): string
    {
        // 'sm'// 'md'// 'lg'// 'xl'// '2xl'// '3xl'// '4xl'// '5xl'// '6xl'// '7xl'
        return '4xl';
    }
    public function getIP(){
         $currentUserInfo = Location::get('102.89.40.176');
         $this->clientLocation = $currentUserInfo->latitude.",". $currentUserInfo->longitude;
        //  session()->put('ipaddress',$theIP);


    }
}
