@extends('layout.app')
@section('content')
    <table id="example" class="table table-hover table-bordered table-dark">
        <thead>
        <tr>
            <th>Student's ID</th>
            <th>Date</th>
            <th>Beginner</th>
            <th>Intermediate</th>
            <th>Expert</th>

        </tr>
        </thead>
        <tbody>

        @foreach($att as $att)
            <tr>
                <td>{{ $att->id }}</td>
                <td>{{$att->date}}</td>
                <td>{{ $att->beginner }}</td>
                <td>{{$att->intermediate}}</td>
                <td>{{$att->expert}}</td>

            </tr>
        @endforeach

        </tbody>
    </table>

@endsection