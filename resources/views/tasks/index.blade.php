@extends('layouts.app')
@section('content')
<div>

    <a href="{{route('tasks.create')}}">
        <button type="button" class="btn btn-primary">Create New Task</button>
    </a>

    <table class="table table-responsive table-borderd table-hover">



        <thead>
            <tr>
                <!-- <th><input type="checkbox" id="selectAllBoxes" class="glyphicon glyphicon-check"></th> -->
                <th>ID</th>
                <th>Title</th>
                <th>Descriptiion</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>

        <tbody class="table-group-divider">
            @foreach ($tasks as $task)
            <tr>
                <th scope="row">{{ $task->id }}</th>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>
            </tr>


            @endforeach

        </tbody>
    </table>

</div>

@endsection