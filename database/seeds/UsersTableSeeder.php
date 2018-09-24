<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,29)->create();

        User::create([
        	'name' => 'David Sadrinas',
        	'email' => 'david.sadrinas@gmail.com',
        	'password' => bcrypt('david1989')
        ]);
    }
}
