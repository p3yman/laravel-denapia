@extends('denapia::admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit User</h4>
                </div>
                <div class="card-body">

                    {!! Form::model($model, ['route' => ['denapia.users.update', $model->id], 'id'=>'main-form', 'method'=>'put']) !!}

                        @include('denapia::admin.users.form')

                        <div class="pull-right">
                            <button class="btn btn-info btn-fill">Update</button>
                        </div>
                        <div class="clearfix"></div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@stop