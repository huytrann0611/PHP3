<!-- Ke thua view master: admin-layout/master.blade.php -->
@extends('admin-layout.master')
@section('title', 'Title list extends from admin-layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh sach sinh vien</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <table border='1' class='table table-bordered table-dark'>
                <thead>
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
                            <td><a href="student/{{$student->id}}">{{ $student->name }}</a></td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->age }} </td>
                            <td>
                                @if ($student->gender == 0)
                                    Female
                                @elseif ($student->gender == 1)
                                    Male
                                @else
                                    Nothing
                                @endif
                            </td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->is_active == 1 ? 'Yes' : 'No' }}</td>
                            <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                            @csrf
                            <input type='hidden' name='_method' value='DELETE'></input>
                            <td>
                            <a href="{{ route('student.destroy', $student->id) }}">
                            <button>Delete</button>
                            </form>
                            <a href="{{ route('student.edit', $student->id) }}">
                            <button>Edit</button>
                            <th><a href="{{route('student.create')}}">
                            <button class="btn btn-success">Thêm</button></a></th>
                             </a>
                            </a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('footer', 'Footer list extends')