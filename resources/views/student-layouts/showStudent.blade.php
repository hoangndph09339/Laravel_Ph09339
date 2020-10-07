@extends('admin-layout.master')
@section('title','Student Management')
@section('content')
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
            <tbody class="text-success">
            <tr>
{{--                {{dd($student)}}--}}
                <td><h4>{{$student->name}}</h4></td>
                <td><h4>{{$student->phone}}</h4></td>
                <td><h4>{{$student->age}}</h4></td>
                <td><h4>{{$student->address}}</h4></td>
                <td><h4>{{$student->gender == 1 ? "Male" : "Female"}}</h4></td>
                <td><h4>{{$student->is_active == 1 ? 'Yes' : 'No'}}</h4></td>
            </tr>
            </tbody>
    </table>

@endsection
