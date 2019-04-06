<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Task</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="text-center">

    <br/>

    @foreach($errors->all() as $error)

        <div class="alert alert-danger" role="alert">
        {{$error}}
        </div>

    @endforeach


        <form action="/updatetasks" method="post">
        {{csrf_field()}}
            <br/>
            <input type="text" class="form-control" name="task" value="{{$taskdata->task}}" />
            <input type="hidden" name="id" value="{{$taskdata->id}}" />
            <br/>
            <input type="submit" class="btn btn-warning" value="Update" />
            <a href="/task" type="button" class="btn btn-danger">Cancel</a>
            <a href="/" type="button" class="btn btn-primary">Home</a>

        </form>
        </div>
    </div>
</body>
</html>
