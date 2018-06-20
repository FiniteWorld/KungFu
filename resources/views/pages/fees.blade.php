@extends('layout.app')
@section('content')
    <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">FEE RECORD</h1>

    {!! Form::open(['action'=> 'FeesController@store' , 'method' => 'POST'])!!}
    <div class="col-md-10">
        <div class="form-row">
            <div class="form-group col-md-4">
                {{Form:: label ('id', 'Student Id:')}}
                {{Form:: text ('id', '', ['class' => 'form-control', 'placeholder' => 'Enter Student id'])}}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                {{Form:: label ('purchase_type', 'Payment Type')}}
                {{Form::select('purchase_type', ['Beginner' => 'Beginner Test',
                'Intermediate' => 'Intermediate Test',
                'Expert' => 'Expert Test',
                'Silver' => 'Silver Membership',
                'Gold' => 'Gold Membership',
                'Platinum' => 'Platinum Membership',
                 'Others' => 'Others'],['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                {{Form:: label ('purchase_amount', 'Amount')}}
                {{Form:: text ('purchase_amount', '', ['class' => 'form-control', 'placeholder' => 'Enter Amount'])}}
            </div>
        </div>


        <div class="form-row">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
    </div>

    {!! Form::close() !!}


@endsection