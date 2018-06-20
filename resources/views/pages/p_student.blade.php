@extends('layout.app')
@section('content')
    <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">REGISTER PARENT AS A STUDENT</h1>

        <div style="padding-top:30px; padding-left: 80px; padding-right: 80px">
            {!! Form::open(['action'=>'Parent_register@store','method' => 'POST'])!!}
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

            <div class="form-row">
                <div class="form-group col-md-4">
                    {{Form:: label ('pemail', 'Email Id:')}}
                    {{Form:: email ('pemail', '', ['class' => 'form-control', 'placeholder' => 'Enter Email Id'])}}
                </div>
                <div class="form-group col-md-4">
                    {{Form:: label ('pcontact', 'Contact No.')}}
                    {{Form:: text ('pcontact', '', ['class' => 'form-control', 'placeholder' => '(###) ###-####'])}}
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
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{Form:: label ('dob', 'Date of Birth')}}
                    {{Form:: date ('dob', '', ['class' => 'form-control'])}}
                </div>
                <div class="form-row">
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
                </div>
            </div>
            {{Form::submit('Register', ['class' => 'btn btn-primary'])}}
        </div>



    {{Form::hidden('_method', 'PUT')}}
    {!! Form::close() !!}

@endsection