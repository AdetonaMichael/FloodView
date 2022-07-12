<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = ['location','street','city','state','lga','zipcode','loss_of_life','description','images' => 'array','other_damages','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
