@extends('layout.app')
@section('content')
    <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">Change Belt Rank Here!!</h1>
    {!! Form::open(['action'=> 'Stu_register@update' ,'method' => 'POST'])!!}
    <table id="example" class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>Student ID</th>
            <th>Student First Name</th>
            <th>Student LAst Name</th>
            <th>Current Rank</th>
            <th>New Rank</th>
        </tr>
        </thead>
        <tbody>

        @foreach($stu as $stu)
            <tr>
                <td>{{ $stu->id }}</td>
                <td>{{ $stu->name }}</td>
                <td>{{ $stu->lname }}</td>
                <td>{{ $stu->rank }}</td>
                <td>{{Form::select('rank', ['White' => 'White',
            'Yellow' => 'Yellow',
            'Half Green' => 'Half Green',
            'Green' => 'Green',
            'Half Blue' => 'Half Blue',
            'Blue' => 'Blue',
            'Half Red' => 'Half Red',
            'Red' => 'Red',
            'Half Black' => 'Half Black',
            'Black' => 'Black'], 'White')}}</td>
            </tr>
        @endforeach
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
        </tbody>
    </table>
    {!! Form::close() !!}
@endsection