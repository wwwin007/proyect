<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user2=new User();
        $user2->name="wilson";
        $user2->email="wilson@gmail.com";
        $user2->password=bcrypt("wilson54321");
    
        $user2->save();

        $user3=new User();
        $user3->name="carlos";
        $user3->email="carlos@gmail.com";
        $user3->password=bcrypt("carlos54321");
    
        $user3->save();

        $user4=new User();
        $user4->name="maria";
        $user4->email="maria@gmail.com";
        $user4->password=bcrypt("maria54321");
   
        $user4->save();
    }
}
