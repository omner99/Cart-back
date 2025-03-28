<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /** @use HasFactory<\Database\Factories\ItemFactory> */
    use HasFactory;
    // protected $table = "item";

    
    protected $fillable = ["name","quantity","price"];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
