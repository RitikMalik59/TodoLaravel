@extends('layouts.app')

@section('content')

<div class="container col-lg-4">

    <h1 class="display-4 text-center">ToDo.</h1>

    <form action="" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Task Title</label>
            <input type="email" class="form-control" id="" placeholder="Add New ToDo Task" require>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Task Description</label>
            <textarea class="form-control" id="" placeholder="Describe your Task ..." rows="3"></textarea>
        </div>
        <div class="col-md-4">
            <label for="status" class="form-label">Task Status</label>

            <select class="col-md-4 form-select" aria-label="Default select example">
                <option selected>Select Status</option>
                <option value=pending">Pending</option>
                <option value="inProgress">In Progress</option>
                <option value="testing">Testing</option>
                <option value="completed">Completed</option>
            </select>
        </div>
    </form>
</div>



@section('footer')

<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
</footer>

@endsection

@endsection