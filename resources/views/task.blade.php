<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Task App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="text-center">
           <h1>Daily Tasks</h1>
<div class="row">
    <div class="col-md-12">

    @foreach($errors->all() as $error)

    <div class="alert alert-danger" role="alert">
    {{$error}}
    </div>

    @endforeach


        <form action="/saveTask" method="post">
        {{csrf_field()}}
            <input type="text" class="form-control" name="task" placeholder="Enter Your Task here!">
            <br/>
            <input type="submit" class="btn btn-success" value="Save">
            <input type="button" class="btn btn-warning" value="Clear">
            <a href="/" class="btn btn-primary">Home</a>
        </form>
        <br/>
        <table class="table table-dark">
            <th>ID</th>
            <th>Task</th>
            <th>Completed</th>
            <th>Action</th>
            @foreach($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->task}}</td>
                <td>
                @if($task->isCompleted)
                <button class="btn btn-success" disabled>Completed</button>
                @else
                <button class="btn btn-warning" disabled>Not Completed</button>
                @endif
                </td>
                <td>
                @if(!$task->isCompleted)
                    <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>
                @else
                <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark As Not Completed</a>
                @endif

                <a href="/deletetask/{{$task->id}}" class="btn btn-light">Delete</a>

                <a href="/updatetask/{{$task->id}}" class="btn btn-secondary">Update</a>

                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>
        </div>
    </div>
</body>
</html>
