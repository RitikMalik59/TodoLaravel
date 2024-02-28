@extends('layouts.app')

@section('content')

<div class="container col-lg-4">

    <h1 class="display-4 text-center">ToDo.</h1>

    <form method="post" action="{{ route('tasks.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Task Title</label>
            <input type="text" class="form-control" name="title" placeholder="Add New ToDo Task" require>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Task Description</label>
            <textarea class="form-control" name="description" placeholder="Describe your Task ..." rows="3"></textarea>
        </div>
        <div class="col-md-4">
            <label for="status" class="form-label">Task Status</label>

            <select class="col-md-4 form-select" name="status" aria-label="Default select example">
                <option selected>Select Status</option>
                <option value="pending">Pending</option>
                <option value="inProgress">In Progress</option>
                <option value="testing">Testing</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <br>
        <div class="col-md-4">
            <input type="submit" class="btn btn-primary form-control" name="submit">
        </div>
    </form>
</div>





@endsection