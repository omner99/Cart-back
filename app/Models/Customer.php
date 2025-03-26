<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;

    protected $fillable = ["first_name","last_name","addresses"];

    public function items(){
        //Parcial tiene estudiante_id
        return $this->hasMany(Item::class);
    }

    public function addresses(){
        //Parcial tiene estudiante_id
        return $this->hasMany(Address::class);
    }
}
