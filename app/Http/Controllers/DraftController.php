<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use App\Http\Controllers\Controller;
use App\Draft;
use App\DraftBoard;

use App\Movie;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DraftRequest;
use Illuminate\Support\Facades\DB;


class DraftController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('draftUser', ['except' => ['index','create','store']]);
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $drafts = Auth::user()->drafts()->get();

        return view('drafts.index')->with('drafts', $drafts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('drafts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(DraftRequest $request)
	{

        $draft = new Draft();
        $draft->name = $request->get('name');
        $draft->total_bid = $request->get('total_bid');

        $draft->save();
        Auth::user()->drafts()->attach($draft);


        return redirect('/draft/'.$draft->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data['draft'] = Draft::find($id);
        $data['board'] = DraftBoard::find($id);
        $data['standings'] = DraftBoard::standings($id);
        //dd($data);

        return view('drafts.show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$draft = Draft::find($id);
        return view('drafts.edit')->with('draft',$draft);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, DraftRequest $request)
	{
        $draft = Draft::find($id);
        $draft->name = $request->get('name');
        $draft->total_bid = $request->get('total_bid');

        $draft->save();

        return redirect('draft/'.$id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Draft::destroy($id);
        return redirect('/draft');
	}


    public function showUsers($draft_id)
    {
        $data['draft'] = Draft::find($draft_id);
        $data['users'] = $data['draft']->users()->get();

        return view('drafts.players', $data);
    }


    public function addUser($draft_id, Requests\AddPlayerRequest $request)
    {
        $user = User::where('email', $request->get('email'))->first();
        $draft = Draft::find($draft_id);

        $user->drafts()->attach($draft);

        return redirect('draft/'.$draft_id.'/players');
    }

    public function quitDraft($draft_id)
    {
        $draft = Draft::findOrFail($draft_id);

        Auth::user()->drafts()->detach($draft);
        return redirect('draft');
    }

    public function showMovies($draft_id)
    {
        $data['draft'] = Draft::findOrFail($draft_id);
        $data['moviesInDraft'] = $data['draft']->movies()->get();
        $excludeMovies = array();
        foreach( $data['moviesInDraft'] as $movie ){
            $excludeMovies[] = $movie->id;
        }
        $data['movies'] = Movie::whereNotIn('id', $excludeMovies)->get();

        return view('drafts.movies', $data);
    }

    public function removeMovie($draft_id, $movie_id){
        DraftBoard::removeMovie($draft_id, $movie_id);
        return redirect('/draft/'.$draft_id.'/movies');
    }

    public function addMovies($draft_id){
        $movies = Request::get('movies');
        foreach($movies as $movie_id){
            DraftBoard::addMovie($draft_id, $movie_id);
        }
        return redirect('/draft/'.$draft_id.'/movies');
    }

    public function makeBid($draft_id, $draftBoard_id){
        $bid = Request::get('bid');

        DraftBoard::makeBid($draftBoard_id, $bid, Auth::id() );

        return redirect('/draft/'.$draft_id);
    }
}
