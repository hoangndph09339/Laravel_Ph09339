@extends('admin-layout.master')
@section('title', 'Create Students')
@section('content')
    <h1>Create Students</h1>
    <form action="{{Route('backend.students.create')}}" method="post"> @csrf
        <table>
            <th class="w-100">
            <td><label for="name">Student Name: </label></td>
            <td><label for="phone">Student Phone: </label></td>
            <td><label for="age">Student Age: </label></td>
            <td><label for="address">Student Address: </label></td>
            <td><label for="gender">Student Gender: </label></td>
            <td><label for="isactive">Is Active ?</label></td>
            </th>
            <tr>
                <td><input type="text" name="name" placeholder="Enter Student Name"></td>
                <td><input type="text" name="phone" placeholder="Enter Student Phone"/></td>
                <td><input type="number" name="age" placeholder="Enter Student Age"></td>
                <td><input type="text" name="address" placeholder="Enter Student Adderss"></td>
                <td><select name="gender" id="gender">
                        <option value="0">Female</option>
                        <option value="1">Male</option>
                        <option value="2">3D</option>
                    </select></td>
                <td><select name="isactive" id="isactive">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select></td>
            </tr>
        </table>
        <button type="submit">Create</button>
        <button type="reset">Cancel</button>
    </form>
@endsection
