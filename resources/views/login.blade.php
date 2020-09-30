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
    @section('header','login header List')

    @section('content')
    <form action="" method='post'>
    <label for="">Tên đăng nhập</label>
    <input type="text">
    <label for="">Mật khẩu</label>
    <input type="password">
    <input type="submit">
    </form>
    @endsection
    @section('footer',' login footer List')
</body>
</html>