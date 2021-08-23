<?php

use App\ServiceModel;
use Illuminate\Database\Seeder;

class Serviceseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $property1=ServiceModel::create([
            'profile'=> 'client-face2.png',
            'name' => 'M K Parmar',
            'phone' => '9925243238',
            'newphone' => '7048360791',
            'city' => 'Junagadh',
            'gender' => 'Male',
            'Work' => 'Woter-Supply',
        ]);
        $property2=ServiceModel::create([
            'profile'=> 'client-face1.png',
            'name' => 'Shyam Geriya',
            'phone' => '9429232692',
            'newphone' => '9429232692',
            'city' => 'Junagadh',
            'gender' => 'Male',
            'Work' => 'Transport',
        ]);
    }
}
