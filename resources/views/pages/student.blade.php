@extends('layout.app')
@section('content')
    <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">REGISTER STUDENT</h1>
    {!! Form::open(['action'=> 'Stu_register@store' , 'method' => 'POST'])!!}
            <div class="container col-md-10">
            <div style="padding-top:30px; padding-left: 20px">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" id="fname" placeholder="Enter first name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" id="lname" placeholder="Enter last name">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for=" dob">Date Of Birth</label>
                            <input type="date" class="form-control" id="dob">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Line 1">
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="state">State/ Province</label>
                            <input type="text" class="form-control" id="state">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip">
                        </div>
                        <div class="form-group col-mod-6">
                            <label for="phone">Mobile Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="(999)-999-9999">
                        </div>
                    </div>
            </div>
            <div class="form-group col-md-4">
                <label for="rank">Rank</label>
                <select id="rank" class="custom-select">
                    <option selected>White</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Half Green">Half Green</option>
                    <option value="Green">Green</option>
                    <option value="Half Blue">Half Blue</option>
                    <option value="Blue">Blue</option>
                    <option value="Half Red">Half Red</option>
                    <option value="Red">Red</option>
                    <option value="Half Black">Half Black</option>
                    <option value="Black">Black</option>
                </select>
            </div>
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}


@endsection