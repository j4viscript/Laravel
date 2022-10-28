<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'name' => 'Javier',
            'lastname' => 'Murillo',
            'email' => 'tezjavi@gmail.com',
            'phone_number' => '6131170683',
        ]);
        DB::table('clientes')->insert([
            'name' => 'Kevo',
            'lastname' => 'Garcia',
            'email' => 'quebyn@gmail.com',
            'phone_number' => '612314144',
        ]);
    }
}
