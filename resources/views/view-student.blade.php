<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('index.css')}}">
    <title>STUDENT RECORD</title>
</head>

<body>
    <div class="view-main-container">
        <div class="view-sub-1"><h1>VIEW STUDENTS</h1><a href="/add-student">ADD</a></div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>age</th>
                    <th>address</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_student as $item)
                <tr>
                    <td class="data-cell">{{$item->id}}</td>
                    <td class="data-cell">{{$item->student_name}}</td>
                    <td class="data-cell">{{$item->student_age}}</td>
                    <td class="data-cell">{{$item->student_address}}</td>
                    <td class="action-cell"><a href="/delete-student/{{$item->id}}" class="view-delete-button">delete</a><a href="/edit-student/{{$item->id}}" class="view-edit-button">edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>