<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'earnings', 'rating', 'runtime',
        'release_date', 'synopsis', 'tomatoes_id', 'box_office_id'
    ];

    protected $dates = ['release_date'];

}
