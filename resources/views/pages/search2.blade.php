@extends('layout.app')
@section('content')
    <table id="example" class="table table-hover table-bordered table-dark">
        <thead>
        <tr>
            <th>Student ID</th>
            <th>Student First Name</th>
            <th>Student LAst Name</th>
            <th>Current Rank</th>

        </tr>
        </thead>
        <tbody>

        @foreach($stu as $stu)
            <tr>
                <td>{{ $stu->id }}</td>
                <td>{{ $stu->name }}</td>
                <td>{{ $stu->lname }}</td>

                <td>{{ $stu->rank }}</td>

            </tr>
        @endforeach

        </tbody>
    </table>

@endsection