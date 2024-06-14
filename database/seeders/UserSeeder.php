<?php

namespace Database\Seeders;

use App\Models\Userinfo;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
   
    public function run(): void
    {
        $faker = Faker::create();
        $courses = ['React' , 'Laravel' , 'Django'];
        for($datas = 1 ; $datas<=100 ; $datas++){
            $user = new Userinfo();
            $user->Profile = $faker->imageUrl();
            $user->Name = $faker->name;
            $user->Email = $faker->email;
            $user->Contact = $faker->phoneNumber;
            $user->Address = $faker->address;
            $user->Birtday = $faker->date;
            $user->Gender = $faker->randomElement(['male' , 'female']);
            $user->Course = json_encode($faker->randomElements($courses,rand(1, count($courses))));
            $user->Password = $faker->password;
            $user->save();
        }
      

    }
}
