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
	
	
		DB::table('drafts')->delete();
		DB::table('draft_user')->delete();
		
		DB::insert("INSERT INTO drafts (name, total_bid, created_at, updated_at) values ('Test Game 1',100, NOW(),NOW() )");
		DB::insert("INSERT INTO drafts (name, total_bid, created_at, updated_at) values ('Draft Game 2',100, NOW(),NOW() )");
		
		DB::insert("INSERT INTO draft_user (draft_id, user_id,team_name, created_at, updated_at) values (1,1,'Team Name 1', NOW(),NOW() )");
		DB::insert("INSERT INTO draft_user (draft_id, user_id,team_name, created_at, updated_at) values (1,2,'Team name 2', NOW(),NOW() )");
		DB::insert("INSERT INTO draft_user (draft_id, user_id,team_name, created_at, updated_at) values (2,1,'Team name 3', NOW(),NOW() )");
		DB::insert("INSERT INTO draft_user (draft_id, user_id,team_name, created_at, updated_at) values (1,3,'Team name 4', NOW(),NOW() )");
	
	
		DB::table('draft_boards')->delete();
		DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,1,1, 25, NOW(),NOW() )");
		DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,2,3, 10, NOW(),NOW() )");
		DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,3,2, 13, NOW(),NOW() )");
		DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,4,1, 15, NOW(),NOW() )");
		DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,5,3, 23, NOW(),NOW() )");
		DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,6,2, 17, NOW(),NOW() )");
		DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,7,null, 0, NOW(),NOW() )");
		DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (2,1,1, 4, NOW(),NOW() )");
		DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (2,8,1, 18, NOW(),NOW() )");
		DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (2,9,null, 0, NOW(),NOW() )");
		DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (2,10,null, 0, NOW(),NOW() )");
		
	}

}
