<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MovieTableSeeder extends Seeder {

    public function run()
    {
        DB::table('movies')->delete();

        $movies = Tomatoes::boxOffice();
        foreach( $movies['movies'] as $movie){
            App\Movie::create([
                'name'          => $movie['title'],
                'rating'        => $movie['mpaa_rating'],
                'runtime'       => $movie['runtime'],
                'release_date'  => $movie['release_dates']['theater'],
                'synopsis'      => $movie['synopsis'],
                'tomatoes_id'   => $movie['id'],
            ]);
        }

        $movies = Tomatoes::upcoming();
        foreach( $movies['movies'] as $movie){
            App\Movie::create([
                'name'          => $movie['title'],
                'rating'        => $movie['mpaa_rating'],
                'runtime'       => $movie['runtime'],
                'release_date'  => $movie['release_dates']['theater'],
                'synopsis'      => $movie['synopsis'],
                'tomatoes_id'   => $movie['id'],
            ]);
        }


        App\Movie::create([
            'name'          => 'test movie 1',
        ]);
        App\Movie::create([
            'name'          => 'test movie 2',
        ]);



    }

}