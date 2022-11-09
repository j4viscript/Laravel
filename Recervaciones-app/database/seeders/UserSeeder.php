<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user  = new User();
        $user-> name = 'Oskar';
        $user-> lastname = 'Cota';
        $user-> email = 'OskarC@gmail.com';
        $user-> password = bcrypt('cocos3');

        $user->save();

        $user  = new User();
        $user-> name = 'Adrian';
        $user-> lastname = 'Ramirez';
        $user-> email = 'AdrianR@gmail.com';
        $user-> password =  bcrypt('cocazos3');

        $user->save();
    }
}
