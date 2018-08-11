<?php

use Illuminate\Database\Seeder;
use Register\User;
use Register\Entities\Register;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function($user){

            $user->register()->save(factory(Register::class)->make());

        });
    }
}
