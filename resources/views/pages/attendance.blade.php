@extends('layout.app')
@section('content')
    <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">STUDENT ATTENDANCE</h1>
    <div class="container col-md-10">
        <div style="padding-top:30px; padding-left: 20px">
            {!! Form::open(['action'=> 'FeesController@attendance' , 'method' => 'POST'])!!}
            <div class="col-md-10">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {{Form:: label ('id', 'Student ID')}}
                        {{Form:: text ('id', '', ['class' => 'form-control', 'placeholder' => 'Enter Student ID'])}}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="form-check form-check-inline">
                            {{Form::radio('type1', 'P')}}
                            {{Form:: label ('type', 'Beginner')}}
                        </div>
                        <div class="form-check form-check-inline">
                            {{Form::radio('type2', 'P')}}
                            {{Form:: label ('type', 'Intermediate')}}
                        </div>
                        <div class="form-check form-check-inline">
                            {{Form::radio('type3', 'P')}}
                            {{Form:: label ('type', 'Expert')}}
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {{Form::submit('Add', ['class' => 'btn btn-primary'])}}

                    </div>
                </div>
            </div>
@endsection