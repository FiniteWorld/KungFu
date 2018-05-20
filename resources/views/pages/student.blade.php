@extends('layout.app')
@section('content')
    <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">REGISTER STUDENT</h1>
    <div class="container col-md-10">
        <div style="padding-top:30px; padding-left: 20px">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="sfname">First Name</label>
                    <input type="text" class="form-control" id="sfname" placeholder="Enter first name">
                </div>
                <div class="form-group col-md-6">
                    <label for="slname">Last Name</label>
                    <input type="text" class="form-control" id="slname" placeholder="Enter last name">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for=" dob">Date Of Birth</label>
                    <input type="date" class="form-control" id="dob">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Line 1">
                </div>
                <div class="form-group col-md-4 ">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">State/ Province</label>
                    <input type="text" class="form-control" id="inputState">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-mod-6">
                    <label for="mobilenumber">Mobile Number</label>
                    <input type="tel" class="form-control" id="mobilenumber" placeholder="(999)-999-9999">
                </div>
            </div>
        </div>
            <div class="form-group col-md-4">
                <label for="inputRank">Rank</label>
                <select id="inputRank" class="custom-select">
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
        <div class="col-md-4 center-block">
        <button type="submit" class="btn btn-primary center-block">Submit</button>
        </div>
    </div>
    </form>

@endsection