<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Todo App</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
        </header>
    </div>

    <h1>Create Task</h1>

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>