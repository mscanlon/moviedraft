<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Draft extends Model {

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'total_bid'];
    
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function movies()
    {
        return $this->belongsToMany('App\Movie','draft_boards');
    }

}
