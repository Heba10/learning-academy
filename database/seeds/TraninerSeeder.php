<?php

use Illuminate\Database\Seeder;
use App\Trainer;

class TraninerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
        'name' => 'Heba Abd elmonaem',
        'speciality' => 'web development',
        'img' => '1.jpg'
        ]);


        Trainer::create([
            'name' => 'hala mostafa',
            'speciality' => 'web development',
            'img' => '1.jpg'
            ]);
         
        Trainer::create([
                'name' => 'hasanin ahemad',
                'speciality' => 'dentist',
                'img' => '1.jpg'
                ]);
        Trainer::create([
                    'name' => 'hazem mohamed',
                    'speciality' => 'doctor',
                    'img' => '1.jpg'
                    ]);
        Trainer::create([
                        'name' => 'magdy mostafa',
                        'speciality' => 'english teacher',
                        'img' => '1.jpg'
                        ]);


    }
}
