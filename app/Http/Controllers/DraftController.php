<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Draft;
use App\DraftBoard;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateDraftRequest;

class DraftController extends Controller {

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
	public function store(CreateDraftRequest $request)
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
		return "edit draft $id";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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

}
