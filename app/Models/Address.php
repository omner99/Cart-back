<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /** @use HasFactory<\Database\Factories\AddressFactory> */
    use HasFactory;
    protected $table = 'addresses';
    protected $fillable = ["line_1","line_2","city","state","zip"];

    public function customer()
    {
        //Estudiante tiene carrera_id
        return $this->belongsTo(Customer::class);
    }
}
