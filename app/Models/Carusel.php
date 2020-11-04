<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carusel extends Model
{
    use HasFactory;

        protected $fillable = [
        'title',
        'url',
    ];


   public $timestamps = true;   
    
   protected $table = 'carusels';

 
    public function user(){

    return $this->belongsTo(User::class);

    }



}
