@extends('denapia::admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create User</h4>
                </div>
                <div class="card-body">

                    {!! Form::open(['route' => 'denapia.users.store', 'id'=>'main-form']) !!}

                        @include('denapia::admin.users.form')

                        <button class="btn btn-info btn-fill pull-right">Create</button>
                        <div class="clearfix"></div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@stop