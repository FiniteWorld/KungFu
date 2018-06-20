@extends('layout.app')
@section('content')

    <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">SEARCH</h1>
    <div style="padding-top:30px; padding-left: 80px">
        <div class="col-md-12">
            {!! Form::open(['action'=> ['PagesController@q'] , 'method' => 'POST'])!!}
            <div class="form-row ">
                <div class="form-group">
                    {{Form::label('search', 'SEARCH: ')}}
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
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {!! Form::close() !!}
@endsection