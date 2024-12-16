<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('index.css')}}">
    <title>ADD STUDENT</title>
</head>

<body>
    @if (isset($message) && $message != null )
    <div class="error-message">
        <label>{{$message}}</label>
        <a href="/add-student">X</a>
    </div>
    @endif
    <div class="add-main-container">
        <h1>REGISTER STUDENT</h1>
        <form action="{{route('addStudent')}}" method="post">
            @csrf
            <input type="text" placeholder="student name" name="student_name" class="add-input">
            <input type="text" placeholder="student age" name="student_age" class="add-input">
            <input type="text" placeholder="student address" name="student_address" class="add-input">
            <input type="submit" class="add-sub-button" value="submit">
        </form>
    </div>
</body>

</html>