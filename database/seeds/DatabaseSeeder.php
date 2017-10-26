<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'cpf' => 1234567890,
          'nome' => str_random(10),
          'email' => str_random(15).'@gmail.com',
        ]);
    }
}
