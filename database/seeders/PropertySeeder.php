<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Property::create([
            'name' => 'شقة التجمع',
            'phone' => '01012076064',
            'price' => '5000000',
            'short_description' => 'some short description',
            'garden' => 0,
            'property_space' => 200,
            'garden_space' => 0,
            'number_of_floors' => 1,
            'number_of_rooms' => 3,
            'number_of_bathrooms' => 2,
            'long_description' => 'some long description some long description some long description',
            'city' => 'القاهرة',
            'area' => 'التجمع',
            'sector' => 'الحي الاول',
            'property_type' => 'sale',
            'finishing_type' => 'full',
            'facade_finishing' => 'almost',
            'active' => 1,
            'banner' => '1726920946.jpg',
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd',
        ]);

        Property::create([
            'name' => 'فيلا التجمع',
            'phone' => '01012076064',
            'price' => '16000000',
            'short_description' => 'some short description',
            'garden' => 1,
            'property_space' => 600,
            'garden_space' => 100,
            'number_of_floors' => 2,
            'number_of_rooms' => 6,
            'number_of_bathrooms' => 4,
            'long_description' => 'some long description some long description some long description',
            'city' => 'القاهرة',
            'area' => 'التجمع',
            'sector' => 'الحي الاول',
            'property_type' => 'sale',
            'finishing_type' => 'full',
            'facade_finishing' => 'full',
            'active' => 1,
            'banner' => '1726920946.jpg',
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd',

        ]);

        Property::create([
            'name' => 'شقة زايد',
            'phone' => '01003233175',
            'price' => '10000',
            'short_description' => 'some short description',
            'garden' => 0,
            'property_space' => 250,
            'garden_space' => 0,
            'number_of_floors' => 1,
            'number_of_rooms' => 3,
            'number_of_bathrooms' => 2,
            'long_description' => 'some long description some long description some long description',
            'city' => 'القاهرة',
            'area' => 'الشيخ زايد',
            'sector' => 'الحي الاول',
            'property_type' => 'rent',
            'finishing_type' => 'full',
            'facade_finishing' => 'full',
            'active' => 1,
            'banner' => '1726920946.jpg',
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd',

        ]);
    }
}
