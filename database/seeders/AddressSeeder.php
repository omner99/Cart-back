<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $address = new Address();
        $address->line_1 = "1ra sur"; 
        $address->line_2 = "2da poniente"; 
        $address->city = "Tuxtla Gutierrez"; 
        $address->state = "Chiapas"; 
        $address->zip = "45012"; 
        $address->customer_id = 1;
        $address->save();

        $address = new Address();
        $address->line_1 = "11 North"; 
        $address->line_2 = "22 East"; 
        $address->city = "New York"; 
        $address->state = "New York"; 
        $address->zip = "45012"; 
        $address->customer_id = 1;
        $address->save();

        $address = new Address();
        $address->line_1 = "Av. Reforma";
        $address->line_2 = "Calle 10";
        $address->city = "Ciudad de México";
        $address->state = "CDMX";
        $address->zip = "06030";
        $address->customer_id = 2;
        $address->save();
            
        $address = new Address();
        $address->line_1 = "Calle Juárez";
        $address->line_2 = "Esquina con Morelos";
        $address->city = "Guadalajara";
        $address->state = "Jalisco";
        $address->zip = "44100";
        $address->customer_id = 3;
        $address->save();
            
        $address = new Address();
        $address->line_1 = "5ta Avenida";
        $address->line_2 = "Frente al parque central";
        $address->city = "Mérida";
        $address->state = "Yucatán";
        $address->zip = "97000";
        $address->customer_id = 4;
        $address->save();
            
        $address = new Address();
        $address->line_1 = "Calle 15";
        $address->line_2 = "Entre 8 y 10";
        $address->city = "Monterrey";
        $address->state = "Nuevo León";
        $address->zip = "64000";
        $address->customer_id = 5;
        $address->save();
            
        $address = new Address();
        $address->line_1 = "Av. Hidalgo";
        $address->line_2 = "Zona Centro";
        $address->city = "Puebla";
        $address->state = "Puebla";
        $address->zip = "72000";
        $address->customer_id = 6;
        $address->save();
            
        $address = new Address();
        $address->line_1 = "Calle Independencia";
        $address->line_2 = "Colonia Centro";
        $address->city = "Querétaro";
        $address->state = "Querétaro";
        $address->zip = "76000";
        $address->customer_id = 7;
        $address->save();
            
        $address = new Address();
        $address->line_1 = "Boulevard Belisario Domínguez";
        $address->line_2 = "Zona Norte";
        $address->city = "Tuxtla Gutiérrez";
        $address->state = "Chiapas";
        $address->zip = "29000";
        $address->customer_id = 8;
        $address->save();
            
        $address = new Address();
        $address->line_1 = "Calle 20 de Noviembre";
        $address->line_2 = "Barrio San Juan";
        $address->city = "San Cristóbal de las Casas";
        $address->state = "Chiapas";
        $address->zip = "29200";
        $address->customer_id = 9;
        $address->save();
            
        $address = new Address();
        $address->line_1 = "Avenida Insurgentes";
        $address->line_2 = "Colonia Roma";
        $address->city = "Ciudad de México";
        $address->state = "CDMX";
        $address->zip = "06700";
        $address->customer_id = 10;
        $address->save();
    }
}
