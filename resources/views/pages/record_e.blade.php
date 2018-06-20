@extends('layout.app')
@section('content')
    <table id="example" class="table table-hover table-bordered table-dark">
        <thead>
        <tr>
            <th>Student's ID</th>
            <th>Student's First Name</th>
            <th>Purchase Type</th>
            <th>Amount</th>
            <th>Date & Time</th>

        </tr>
        </thead>
        <tbody>

        @foreach($att as $att)
            <tr>
                <td>{{ $att->id }}</td>
                <td>{{ $att->name }}</td>
                <td>{{$att->purchase_type}}</td>
                <td>{{$att->purchase_amount}}</td>
                <td>{{$att->created_at}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection