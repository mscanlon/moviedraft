<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DraftsSeeder extends Seeder {

    public function run()
    {
        DB::table('drafts')->delete();
        DB::table('draft_user')->delete();

        DB::insert("INSERT INTO drafts (name, total_bid, created_at, updated_at) values ('Test Game 1',100, NOW(),NOW() )");
        DB::insert("INSERT INTO drafts (name, total_bid, created_at, updated_at) values ('Draft Game 2',100, NOW(),NOW() )");
        DB::insert("INSERT INTO drafts (name, total_bid, created_at, updated_at) values ('Empty Game 3',100, NOW(),NOW() )");
        $this->command->info('Drafts seeded!');

        DB::insert("INSERT INTO draft_user (draft_id, user_id, created_at, updated_at) values (1,1, NOW(),NOW() )");
        DB::insert("INSERT INTO draft_user (draft_id, user_id, created_at, updated_at) values (1,2, NOW(),NOW() )");
        DB::insert("INSERT INTO draft_user (draft_id, user_id, created_at, updated_at) values (2,1, NOW(),NOW() )");
        DB::insert("INSERT INTO draft_user (draft_id, user_id, created_at, updated_at) values (1,3, NOW(),NOW() )");
        DB::insert("INSERT INTO draft_user (draft_id, user_id, created_at, updated_at) values (3,1, NOW(),NOW() )");
        $this->command->info('Draft Users seeded!');

//        DB::table('draft_boards')->delete();
//        DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,1,1, 25, NOW(),NOW() )");
//        DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,2,3, 10, NOW(),NOW() )");
//        DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,3,2, 13, NOW(),NOW() )");
//        DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,4,1, 15, NOW(),NOW() )");
//        DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,5,3, 23, NOW(),NOW() )");
//        DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,6,2, 17, NOW(),NOW() )");
//        DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (1,7,null, 0, NOW(),NOW() )");
//        DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (2,1,1, 4, NOW(),NOW() )");
//        DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (2,8,1, 18, NOW(),NOW() )");
//        DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (2,9,null, 0, NOW(),NOW() )");
//        DB::insert("INSERT INTO draft_boards (draft_id, movie_id,user_id, bid, created_at, updated_at) values (2,10,null, 0, NOW(),NOW() )");
//        $this->command->info('DraftBoards seeded!');
    }

}