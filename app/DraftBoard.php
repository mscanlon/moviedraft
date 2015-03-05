<?php namespace App;

use Illuminate\Support\Facades\DB;

class DraftBoard {
    
    public static function find($id){
        return DB::table('draft_boards')
            ->join('movies', 'movie_id', '=', 'movies.id')
            ->leftJoin('users', 'user_id', '=', 'users.id')
            ->select('draft_boards.id','user_id', 'users.name as userName', 'movies.name', 'movies.money', 'bid', 'draft_boards.updated_at')
            ->where('draft_id', $id)->get();

    }


    public static function standings($id){
        return DB::table('draft_boards')
            ->join('movies', 'movie_id', '=', 'movies.id')
            ->Join('users', 'user_id', '=', 'users.id')
            ->select(DB::raw('users.name, SUM(money)as money, SUM(bid) as bid'))
            ->where('draft_id', $id)
            ->groupBy('user_id')
            ->orderBy('money', 'desc')
            ->get();
    }
}
