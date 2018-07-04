<?php

namespace Peyman3d\Denapia\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Peyman3d\Denapia\Http\Requests\UserCreateRequest;
use Peyman3d\Denapia\Http\Requests\UserUpdateRequest;

class DenapiaUserController extends Controller
{
	
	protected $model;
	
	/**
	 * DenapiaUserController constructor.
	 *
	 * @param $model
	 */
	public function __construct( User $model ) {
		$this->model = $model;
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$models = $this->model->orderBy('created_at', 'desc')->paginate(12);
		
		return view('denapia::admin.users.index', compact('models'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('denapia::admin.users.create');
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param UserCreateRequest $request
	 *
	 * @return Response
	 */
	public function store(UserCreateRequest $request)
	{
		$hashed_password = bcrypt($request->get('password'));
		$request->offsetSet('password', $hashed_password);
		
		$model = $this->model->create($request->all());
		
		return redirect()->route('denapia.users.edit', $model->id);
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$model = $this->model->findOrFail($id);
		
		return view('denapia::admin.users.edit', compact('model'));
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param UserUpdateRequest $request
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update(UserUpdateRequest $request, $id)
	{
		$model = $this->model->findOrFail($id);
		
		if( $request->get('password') != '' ){
			$hashed_password = bcrypt($request->get('password'));
			$request->offsetSet('password', $hashed_password);
			
			$fields = $request->all();
		} else {
			$fields = $request->except('password');
		}
		
		$model->update($fields);
		$model->save();
		
		return back();
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
