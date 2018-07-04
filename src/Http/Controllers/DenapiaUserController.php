<?php

namespace Peyman3d\Denapia\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DenapiaUserController extends Controller
{
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$models = User::orderBy('created_at', 'desc')->paginate(12);
		
		return view('denapia::admin.users.index', compact('models'));
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
	 * Move the specified resource in trash.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function trash($id)
	{
		//
	}
	
	/**
	 * Restore the specified resource from trash.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function restore($id)
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