<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = new Item();
        $item->name = "Tomate"; 
        $item->quantity = 4; 
        $item->price = 29.50; 
        $item->save();
            
        $item = new Item();
        $item->name = "Cebolla"; 
        $item->quantity = 6; 
        $item->price = 15.00; 
        $item->save();
            
        $item = new Item();
        $item->name = "Zanahoria"; 
        $item->quantity = 8; 
        $item->price = 22.30; 
        $item->save();
            
        $item = new Item();
        $item->name = "Lechuga"; 
        $item->quantity = 5; 
        $item->price = 18.70; 
        $item->save();
            
        $item = new Item();
        $item->name = "Pepino"; 
        $item->quantity = 3; 
        $item->price = 14.80; 
        $item->save();
            
        $item = new Item();
        $item->name = "Pimiento"; 
        $item->quantity = 2; 
        $item->price = 32.00; 
        $item->save();
            
        $item = new Item();
        $item->name = "Espinaca"; 
        $item->quantity = 7; 
        $item->price = 20.50; 
        $item->save();
            
        $item = new Item();
        $item->name = "Brócoli"; 
        $item->quantity = 4; 
        $item->price = 35.60; 
        $item->save();
            
        $item = new Item();
        $item->name = "Acelga"; 
        $item->quantity = 5; 
        $item->price = 25.40; 
        $item->save();
            
        $item = new Item();
        $item->name = "Coliflor"; 
        $item->quantity = 3; 
        $item->price = 28.90; 
        $item->save();

    }
}
