<?php namespace App;

use Guzzle\Service\Client;

class TomatoAPI {

    protected $client;
    private $apiKey;

    public function __construct(Client $client)
    {
        $this->apiKey = 'apikey=bhk78uy9qazmm5t3bexdexvp';
        $this->client = $client;
        //$this->client = new \Guzzle\Service\Client('http://api.rottentomatoes.com/api/public/v1.0/');
    }

    public function search($query)
    {
        return $this->client
            ->get('movies.json?'.$this->apiKey.'&q='.$query)
            ->send()->json();
    }


    public function find($tomato_id)
    {
        return $this->client
            ->get('movies/'.$tomato_id.'.json?'.$this->apiKey)
            ->send()->json();
    }

    public function boxOffice()
    {
        return $this->client
            ->get('lists/movies/box_office.json?'.$this->apiKey)
            ->send()->json();
    }

    public function upcoming()
    {
        return $this->client
            ->get('lists/movies/upcoming.json?'.$this->apiKey)
            ->send()->json();
    }

}