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
	 	$username=\Auth::user();
	 	$article=articles::find($id);
		return view('articles.idd',compact('article','username'));
	 }
	 
	 
	 public function create()
	 {
	 	$username=\Auth::user();
	 	return view('articles.create',compact('username'));
	 }
	public function deletes($id)
	{
		$article=articles::find($id);
		articles::find($id)->delete();
		\Session::flash('flash_message',"Your article ( $article->title ) has been deleted");
	
		return redirect('home');
	}
	 
	 
	public function index()
	{
		$article=articles::all();
		$username=\Auth::user();
		return view('articles.home',compact('article','username'));
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$input = Request::all();
			$input['updated_at']=Carbon::now();
			$username=\Auth::user();
			$input['user_id']=$username->id;
			articles::create($input);
			\Session::flash('flash_message','Your article has been created');
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
