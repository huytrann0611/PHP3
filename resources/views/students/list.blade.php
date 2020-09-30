<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    @extends('student-layout.master')

    @section('title','Title List')
    @section('header','Header List')

    @section('content')
    <table class="table ">
        <thead class="thead-dark">
                <th>Name</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Active</th>
                <th></th>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->gender}}
                        @if ($student->gender == 0)
                            Female
                        @elseif($student->gender == 1)
                            Male
                        @else
                            Nothing
                        @endif    
                        
                    </td>

                    <td>{{$student->address}}</td>

                    <td>{{$student->is_active == 1 ? 'Yes' : 'No'}}</td>


            
                </tr>
            @endforeach
        
        </tbody>
    </table>
    @endsection
    @section('footer','Footer List')
</body>
</html>