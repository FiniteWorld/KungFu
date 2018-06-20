@extends('layout.app')
@section('content')
    <div class="container">
        <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">SEARCH</h1>

    {!! Form::open(['action'=> ['PagesController@q'] , 'method' => 'POST'])!!}
    <div class="form-row ">
        <div class="form-group col-md-4">
    {{Form::label('search', 'SEARCH')}}
    {{Form::select('category', ['All' => 'All',
     'A' => 'Attendance',
      'B' => 'Beginner',
       'I' => 'Intermediate',
        'E' =>'Expert'],
         null, ['placeholder' => 'Choose a filter..'])}}
        </div>
    </div>

    {{Form::submit('Search', ['class' => 'btn btn-primary'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {!! Form::close() !!}

        {{--<table id="example" class="table table-hover table-bordered">
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

            @foreach($stu as $stu1)
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
--}}

@endsection