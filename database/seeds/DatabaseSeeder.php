<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->call('MovieTableSeeder');
	}

}

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

class MovieTableSeeder extends Seeder {
	public function run()
	{
		DB::table('movies')->delete();

		App\Movie::create(['name' => 'How to Train Your Dragon 2', 'money' => 177002924]);
		App\Movie::create(['name' => 'Guardians of the Galaxy', 'money' => 333176600]);
		App\Movie::create(['name' => 'Big Hero 6', 'money' => 220212093]);
		App\Movie::create(['name' => 'Captain America: The Winter Soldier', 'money' => 259766572]);
		App\Movie::create(['name' => 'Neighbors', 'money' => 150157400]);
		App\Movie::create(['name' => 'Maleficent', 'money' => 241410378]);
		App\Movie::create(['name' => 'The Hunger Games: Mockingjay - Part 1', 'money' => 336464000]);
		App\Movie::create(['name' => 'X-Men: Days of Future Past', 'money' => 233921534]);
		App\Movie::create(['name' => 'Transformers: Age of Extinction', 'money' => 245439076]);
		App\Movie::create(['name' => 'Dawn of the Planet of the Apes', 'money' => 208545589]);
		App\Movie::create(['name' => 'The Amazing Spider-Man 2', 'money' => 208545589]);
		App\Movie::create(['name' => 'Godzilla (2014)', 'money' => 200676069]);
		App\Movie::create(['name' => '22 Jump Street', 'money' => 191719337]);
		App\Movie::create(['name' => 'Teenage Mutant Ninja Turtles (2014)', 'money' => 191204754]);
		App\Movie::create(['name' => 'Interstellar', 'money' => 187642651]);
		App\Movie::create(['name' => 'American Sniper', 'money' => 325308000]);
		App\Movie::create(['name' => 'Divergent', 'money' => 150947895]);
		App\Movie::create(['name' => 'Gone Girl', 'money' => 167767189]);




	}
}
