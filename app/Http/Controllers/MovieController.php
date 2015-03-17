<?php namespace App\Http\Controllers;

use App\Facades\Tomatoes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;

class MovieController extends Controller {
        
        /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
        
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $movies = movie::orderBy('earnings','desc')->get();
            return view('movies.index')->with('movies', $movies);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('movies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	    $movie = Movie::findOrFail($id);
            return view('movies.show')->with('movie', $movie);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$movie = Movie::findOrFail($id);
        return view('movies.edit')->with('movie',$movie);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Requests\MovieUpdateRequest $request)
	{
		$movie = Movie::find($id);
        $movie->name = $request->get('name');
        $movie->earnings = $request->get('earnings');
        $movie->rating = $request->get('rating');
        $movie->synopsis = $request->get('synopsis');

        $movie->save();

        return redirect('/movies/'.$id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function search(Request $request)
    {
        $data['searchTerm'] = $request->input('search');
        $data['results'] = Tomatoes::search($data['searchTerm']);

        return view('movies.results', $data);
    }

}
