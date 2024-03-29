@extends('layout.app')
@section('content')
    <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">REGISTER PARENT</h1>
    <div style="padding-top:30px; padding-left: 100px; padding-right: 100px">
        {!! Form::open(['action'=>'Parent_register@update2','method' => 'POST'])!!}

        <div class="form-group">

            {{Form:: label ('id', 'Student Id:')}}
            {{Form:: text ('id', '', ['class' => 'form-control', 'placeholder' => 'Enter Student Id'])}}
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{Form:: label ('pfname', 'First Name:')}}
                {{Form:: text ('pfname', '', ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}

            </div>
            <div class="form-group col-md-6">
                {{Form:: label ('plname', 'Last Name')}}
                {{Form:: text ('plname', '', ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
            </div>
        </div>

        <div class="form-check form-check-inline">
            {{Form::radio('relation', 'mother')}}
            {{Form:: label ('relation', 'Mother')}}
        </div>
        <div class="form-check form-check-inline">
            {{Form::radio('relation', 'father')}}
            {{Form:: label ('relation', 'Father')}}
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{Form:: label ('pemail', 'Email Id:')}}
                {{Form:: email ('pemail', '', ['class' => 'form-control', 'placeholder' => 'Enter Email Id'])}}
            </div>
            <div class="form-group col-md-6">
                {{Form:: label ('pcontact', 'Contact No.')}}
                {{Form:: text ('pcontact', '', ['class' => 'form-control', 'placeholder' => '(###) ###-####'])}}
            </div>
        </div>

            {{Form::submit('Register', ['class' => 'btn btn-primary'])}}

    </div>
    {{Form::hidden('_method', 'PUT')}}
    {!! Form::close() !!}

@endsection