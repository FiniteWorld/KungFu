@extends('layout.app')
@section('content')
    <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">Change Belt Rank Here!!</h1>
    {!! Form::open(['action'=> ['FeesController@update_rank'] ,'method' => 'POST'])!!}
    <div class="form-group">
        {{Form:: label ('id', 'Student Id:')}}
        {{Form:: text ('id', '', ['class' => 'form-control', 'placeholder' => 'Enter Student Id'])}}
    </div>

    <div class="form-group col-md-4">
        {{Form:: label ('rank', 'Rank')}}
        {{Form::select('rank', ['White' => 'White',
        'Yellow' => 'Yellow',
        'Half Green' => 'Half Green',
        'Green' => 'Green',
        'Half Blue' => 'Half Blue',
        'Blue' => 'Blue',
        'Half Red' => 'Half Red',
        'Red' => 'Red',
        'Half Black' => 'Half Black',
        'Black' => 'Black'], 'White')}}
    </div>
    <div align=center>
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {!! Form::close() !!}

@endsection
