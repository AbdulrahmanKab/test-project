<?php

use Illuminate\Database\Seeder;

class formUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach (range(0,20) as $index){
            $image = $faker->image(public_path('\images'),250,250);
            $imagePath = str_replace(public_path(),'',$image);
            \App\form_users::create([
                'username'=> $faker->userName,
                'email'=>$faker->email,
                'name'=>$faker->name,
                'age'=>30,
                'password'=>$faker->password,
                'bio'=>$faker->realText(),
                'image'=>$imagePath
            ]);
        }

    }
}
