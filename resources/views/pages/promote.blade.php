@extends('layout.app')
@section('content')
    <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">Change Belt Rank Here!!</h1>
    <div style="padding-top:30px; padding-left: 20px">
        {!! Form::open(['action'=> ['Stu_register@update2'] ,'method' => 'POST'])!!}
        <div class="col-md-6">
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{Form:: label ('id', 'Student Id:')}}
                    {{Form:: text ('id', '', ['class' => 'form-control', 'placeholder' => 'Enter Student Id'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
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
            </div>
                {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
            </div>
        </div>
    {{Form::hidden('_method', 'PUT')}}
    {!! Form::close() !!}

@endsection
