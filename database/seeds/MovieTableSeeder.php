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

//        App\Movie::create(['name' => 'How to Train Your Dragon 2', 'earnings' => 177002924]);
//        App\Movie::create(['name' => 'Guardians of the Galaxy', 'earnings' => 333176600]);
//        App\Movie::create(['name' => 'Big Hero 6', 'earnings' => 220212093]);
//        App\Movie::create(['name' => 'Captain America: The Winter Soldier', 'earnings' => 259766572]);
//        App\Movie::create(['name' => 'Neighbors', 'earnings' => 150157400]);
//        App\Movie::create(['name' => 'Maleficent', 'earnings' => 241410378]);
//        App\Movie::create(['name' => 'The Hunger Games: Mockingjay - Part 1', 'earnings' => 336464000]);
//        App\Movie::create(['name' => 'X-Men: Days of Future Past', 'earnings' => 233921534]);
//        App\Movie::create(['name' => 'Transformers: Age of Extinction', 'earnings' => 245439076]);
//        App\Movie::create(['name' => 'Dawn of the Planet of the Apes', 'earnings' => 208545589]);
//        App\Movie::create(['name' => 'The Amazing Spider-Man 2', 'earnings' => 208545589]);
//        App\Movie::create(['name' => 'Godzilla (2014)', 'earnings' => 200676069]);
//        App\Movie::create(['name' => '22 Jump Street', 'earnings' => 191719337]);
//        App\Movie::create(['name' => 'Teenage Mutant Ninja Turtles (2014)', 'earnings' => 191204754]);
//        App\Movie::create(['name' => 'Interstellar', 'earnings' => 187642651]);
//        App\Movie::create(['name' => 'American Sniper', 'earnings' => 325308000]);
//        App\Movie::create(['name' => 'Divergent', 'earnings' => 150947895]);
//        App\Movie::create(['name' => 'Gone Girl', 'earnings' => 167767189]);
    }

}