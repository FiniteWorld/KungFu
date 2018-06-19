@extends('layout.app')
@section('content')
    <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">REGISTER STUDENT</h1>

    <div class="container col-md-10">
        <div style="padding-top:30px; padding-left: 20px">
            {!! Form::open(['action'=> 'Stu_register@store' , 'method' => 'POST'])!!}
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{Form:: label ('name', 'First Name')}}
                    {{Form:: text ('name', '', ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
                </div>
                <div class="form-group col-md-6">
                    {{Form:: label ('lname', 'Last Name')}}
                    {{Form:: text ('lname', '', ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{Form:: label ('dob', 'Date of Birth')}}
                    {{Form:: date ('dob', '', ['class' => 'form-control'])}}
                </div>
                <div class="form-group col-md-4">
                    {{Form:: label ('email', 'Email')}}
                    {{Form:: email ('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{Form:: label ('address', 'Address')}}
                    {{Form:: text ('address', '', ['class' => 'form-control', 'placeholder' => 'Street Address'])}}
                </div>
                <div class="form-group col-md-4 ">
                    {{Form:: label ('city', 'City')}}
                    {{Form:: text ('city', '', ['class' => 'form-control', 'placeholder' => 'Enter City'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{Form:: label ('state', 'State')}}
                    {{Form:: text ('state', '', ['class' => 'form-control', 'placeholder' => 'Enter State'])}}
                </div>
                <div class="form-group col-md-2">
                    {{Form:: label ('zip', 'Zip Code')}}
                    {{Form:: text ('zip', '', ['class' => 'form-control', 'placeholder' => 'Enter Zip Code'])}}
                </div>
                <div class="form-group col-mod-6">
                    {{Form:: label ('phone', 'Contact Number')}}
                    {{Form:: text ('phone', '', ['class' => 'form-control', 'placeholder' => '(999)-999-9999'])}}
                </div>
            </div>
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
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}


@endsection