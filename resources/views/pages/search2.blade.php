@extends('layout.app')
@section('content')
    <table id="example" class="table table-hover table-bordered table-dark">
        <thead>
        <tr>
            <th>Student ID</th>
            <th>Student First Name</th>
            <th>Student Last Name</th>
            <th>Student Email id</th>
            <th>Student D.O.B</th>
            <th>Student Phone</th>
            <th>Student Address</th>
            <th>Student City</th>
            <th>Student Zip</th>
            <th>Student's Parent Name</th>
            <th>Student's Parent Email</th>
            <th>Student's Parent Contact Number</th>

        </tr>
        </thead>
        <tbody>

        @foreach($stu as $stu)
            <tr>
                <td>{{ $stu->id }}</td>
                <td>{{ $stu->name }}</td>
                <td>{{ $stu->lname }}</td>
                <td>{{ $stu->email }}</td>
                <td>{{ $stu->dob }}</td>
                <td>{{ $stu->phone }}</td>
                <td>{{ $stu->rank }}</td>
                <td>{{ $stu->address }}</td>
                <td> {{ $stu->city }}</td>
                <td> {{ $stu->zip }}</td>
                <td>{{ $stu->pfname }}</td>
                <td>{{ $stu->pemail }}</td>
                <td>{{ $stu->pcontact }}</td>


            </tr>
        @endforeach

        </tbody>
    </table>

@endsection