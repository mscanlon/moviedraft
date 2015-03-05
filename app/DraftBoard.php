<?php namespace App;

use Illuminate\Support\Facades\DB;

class DraftBoard {
    
    public static function find($id){
        return DB::table('draft_boards')
            ->join('movies', 'movie_id', '=', 'movies.id')
            ->leftJoin('users', 'user_id', '=', 'users.id')
            ->select('draft_boards.id','user_id', 'users.name as userName', 'movies.name', 'bid', 'draft_boards.updated_at')
            ->where('draft_id', $id)->get();

    }
    
}
