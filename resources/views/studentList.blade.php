@extends('student-layouts.master')
@section('tittle', 'List Student')
@section('style')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
@section('header', 'Header List extend')
@section('content')
<body class="container">
<h1>List Student</h1>
<table class="table table-bordered text-center backgroud">
        <thead class="bg-primary">
        <td>
            <h4>Name: </h4>
        </td>
        <td>
            <h4>Phone: </h4>
        </td>
        <td>
            <h4>Age: </h4>
        </td>
        <td>
            <h4>Address: </h4>
        </td>
        <td>
            <h4>Gender: </h4>
        </td>
        <td>
            <h4>Is Active: </h4>
        </td>
        </thead>
@foreach($studentList as $stl)
        <tbody class="text-success">
        <tr>
            <td><h4>{{$stl->name}}</h4></td>
            <td><h4>{{$stl->phone}}</h4></td>
            <td><h4>{{$stl->age}}</h4></td>
            <td><h4>{{$stl->address}}</h4></td>
            <td><h4>{{$stl->gender == 1 ? "Male" : "Female"}}</h4></td>
            <td><h4>{{$stl->is_active == 1 ? 'Yes' : 'No'}}</h4></td>
        </tr>
        </tbody>
@endforeach
    </table>
</body>
@endsection
