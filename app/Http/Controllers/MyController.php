<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\articles;
use Request;
use Carbon\Carbon;

class MyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 public function __construct()
	 {
	 	$this->middleware('auth');
	 }
	 
	 public function articlescont($id)
	 
	 {
	 	
	 	$article=articles::find($id);
		return view('articles.idd',compact('article'));
	 }
	 
	 public function cre()
	 {
	 	return view('articles.create');
	 }
	
	 
	 
	public function index()
	{
		$article=articles::all();
		
		return view('articles.articlesh',compact('article'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$input = Request::all();
			$input['updated_at']=Carbon::now();
			articles::create($input);
			\Session::flash('flash_message','Your article has beencreated');
	 		return redirect('home');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
