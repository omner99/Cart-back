<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = new Customer();
        $customer->first_name = "Lucas";
        $customer->last_name = "Martínez Ramírez";
        $customer->addresses = "1ra sur y 1ra poniente";  
        $customer->save();

        $customer = new Customer();
        $customer->first_name = "Mateo";
        $customer->last_name = "Fernández López";
        $customer->addresses = "2da sur y 2da poniente";  
        $customer->save();

        $customer = new Customer();
        $customer->first_name = "Isabella";
        $customer->last_name = "Rodríguez Pérez";
        $customer->addresses = "3ra sur y 3ra poniente";  
        $customer->save();

        $customer = new Customer();
        $customer->first_name = "Diego";
        $customer->last_name = "Sánchez Morales";
        $customer->addresses = "4ra sur y 4ra poniente";  
        $customer->save();

        $customer = new Customer();
        $customer->first_name = "Valentina";
        $customer->last_name = "Torres Gutiérrez";
        $customer->addresses = "5ta sur y 5ta poniente";  
        $customer->save();

        $customer = new Customer();
        $customer->first_name = "Sebastián";
        $customer->last_name = "Ramírez Castillo";
        $customer->addresses = "6ta sur y 6ta poniente";  
        $customer->save();

        $customer = new Customer();
        $customer->first_name = "Camila";
        $customer->last_name = "Vargas Jiménez";
        $customer->addresses = "7ma sur y 7ma poniente";  
        $customer->save();

        $customer = new Customer();
        $customer->first_name = "Alejandro";
        $customer->last_name = "Navarro Ruiz";
        $customer->addresses = "8va sur y 8va poniente";  
        $customer->save();

        $customer = new Customer();
        $customer->first_name = "Mariana";
        $customer->last_name = "Ortega León";
        $customer->addresses = "9na sur y 9na poniente";  
        $customer->save();

        $customer = new Customer();
        $customer->first_name = "Sofía";
        $customer->last_name = "González Herrera";
        $customer->addresses = "10ma sur y 10ma poniente";  
        $customer->save();
    }
}
