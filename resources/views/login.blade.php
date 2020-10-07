@extends('student-layouts.masterLogin')
@section('tittle', 'Login')
@section('header', 'Login')
@section('method', 'POST')
@section('content')
<form action="{{Route('postLogin')}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>
                <label for="">User name: </label>
            </td>
            <td>
                <input type="text" name="username" placeholder="Enter Your Username">
            </td>
        </tr>
        <tr>
            <td>
                <label for="">Password: </label>
            </td>
            <td><input type="password" name="password" placeholder="Enter Your Password" id=""></td>
        </tr>
        <tr>
            <td>
                <button type="submit">Login</button>
            </td>
            <td>
                <button type="reset">Cancel</button>
            </td>
        </tr>
    </table>
</form>
@endsection
