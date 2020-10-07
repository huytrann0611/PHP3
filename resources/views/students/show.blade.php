@extends('admin-layout.master')
@section('title','Thong Tin Sinh Vien')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thong Tin Sinh Vien</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
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
                    Tên: {{$student->name}} <br>
                    Số điện thoại: {{$student->phone}} <br>
                    Tuổi: {{$student->age}} <br>
                    Giới Tính: @if ($student->gender == 0)
                    Nu
                    @elseif ($student->gender == 1)
                    Nam
                    @else
                    NOTHING
                    @endif <br>
                    Địa Chỉ: {{$student->address}} <br>
                    Trạng Thái: {{($student->is_active) ? "Kích hoạt" : "Không kích hoạt"}}
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
</div>