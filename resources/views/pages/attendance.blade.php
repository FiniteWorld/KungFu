@extends('layout.app')
@section('content')
    <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">STUDENT ATTENDANCE</h1>
    <div class="container col-md-10">
        <div style="padding-top:30px; padding-left: 20px">
            {!! Form::open(['action'=> 'FeesController@store2' , 'method' => 'POST'])!!}
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{Form:: label ('id', 'Student ID')}}
                    {{Form:: text ('id', '', ['class' => 'form-control', 'placeholder' => 'Enter Student ID'])}}
                </div>
                <div class="form-group">

                    {{Form:: label ('type', 'Beginner')}}
                    {{Form::checkbox('type[]', 'B', false);}}
                    {{Form:: label ('type', 'Intermediate')}}
                {{Form::checkbox('type[]', 'I', false)}}
                    {{Form:: label ('type', 'Expert')}}
                {{Form::checkbox('type[]', 'E', false)}}

                </div>


               {{-- <div class="row">
                    <label class="col-xs-offset-4 col-lg-2 col-xs-5 text-right">Beginner
                        {!! Form::checkbox('exams[1]', '2')!!}
                    </label>
                    <label class="col-xs-offset-4 col-lg-2 col-xs-5 text-right">Intermediate
                        {!! Form::checkbox('exams[2]', '2')!!}
                    </label>
                    <label class="col-xs-offset-4 col-lg-2 col-xs-5 text-right">Advance
                        {!! Form::checkbox('exams[3]', '2')!!}
                    </label>
                    {{Form:: date ('Attendance_Date', '', ['class' => 'form-control'])}}
                    {{ Form::button('Add', array('class' => 'btn')) }}
                </div>--}}
            </div>
            {{ Form::button('Add', array('class' => 'btn')) }}
        </div>
    </div>
@endsection