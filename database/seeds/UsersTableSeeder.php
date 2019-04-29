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
        //
        /*
         * User 1
         */
        $user = new User();
        $user->name = 'example';
        $user->email = 'mock@example.com';
        $user->password = bcrypt('example2019');
        $user->save();
    }
}
