@extends('denapia::admin.layout')

@section('content')

    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">Users</h4>
        </div>
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Register Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach( $models as $model )
                    <tr>
                        <td>{{ $model->id }}</td>
                        <td>{{ $model->name }}</td>
                        <td>{{ $model->email }}</td>
                        <td>{{ $model->created_at }}</td>
                        <td>
                            <a href="{{ route('denapia.users.edit', $model) }}" class="btn btn-sm btn-primary mr-1">Edit</a>
                            {{ Form::open(['route' => ['denapia.users.destroy', $model->id], 'class' => 'pull-right', 'method'=>'delete']) }}
                                {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-sm')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop