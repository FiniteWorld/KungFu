@extends('layout.app')
@section('content')
    <h1>FEE RECORD</h1>

    {!! Form::open(['action'=> 'FeesController@store' , 'method' => 'POST'])!!}
    <div class="form-row">
        <div>
            <div class="form-group">
                {{Form:: label ('id', 'Student Id:')}}
                {{Form:: text ('id', '', ['class' => 'form-control', 'placeholder' => 'Enter Student id'])}}
            </div>
            <div class="form-group">
                {{Form:: label ('mem_type', 'Type of Membership')}}
                {{Form::select('mem_type', ['500' => 'Silver',
                '1500' => 'Gold',
                '5000' => 'Platinum'],['class' => 'form-control'])}}
            </div>
        </div>
        <div>
            <div class="form-group">
                {{Form:: label ('level', 'Class Level')}}
                {{Form::select('level', ['Beginner' => 'Beginner',
                'Intermediate' => 'Intermediate',
                'Expert' => 'Expert'],['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form:: label ('pdt', 'Product')}}
                {{Form:: text ('pdt', '', ['class' => 'form-control', 'placeholder' => 'Enter product Amount'])}}
            </div>
        </div>
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}


@endsection