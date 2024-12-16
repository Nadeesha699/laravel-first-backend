<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('index.css')}}">
    <title>EDIT STUDENT</title>
</head>

<body>
    @if (isset($message) && $message != null )
    <div class="error-message">
        <label>{{$message}}</label>
        <a href="/edit-student/{{$data->id}}">X</a>
    </div>
    @endif
    <div class="edit-main-container">
        <h1>EDIT STUDENT</h1>
        <form action="{{route('editStudent')}}" method="post">
            @csrf
            <input type="text" hidden="true" value="{{$data->id}}" name="id">
            <input type="text" placeholder="Student Name" value="{{$data->student_name}}" name="student_name" class="edit-input">
            <input type="text" placeholder="Student Age" value="{{$data->student_age}}" name="student_age" class="edit-input">
            <input type="text" placeholder="Student Address" value="{{$data->student_address}}" name="student_address" class="edit-input">
            <input type="submit" value="edit" class="edit-sub-button">
        </form>
    </div>
</body>

</html>