<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        App\User::create(['name' => 'Mike Test',
            'email' => 'mike@test.com',
            'password' => bcrypt('tester')]);
        App\User::create(['name' => 'Jen Test',
            'email' => 'Jen@test.com',
            'password' => bcrypt('tester')]);
        App\User::create(['name' => 'Cecil Test',
            'email' => 'cecil@test.com',
            'password' => bcrypt('tester')]);
        App\User::create(['name' => 'Test Test',
            'email' => 'test@test.com',
            'password' => bcrypt('tester')]);
    }

}