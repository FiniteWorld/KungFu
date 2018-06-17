@extends('layout.app')
@section('content')
    <h2>This is student registration page</h2>
    <form>
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
        <div class="form-group">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group>
      <label for="dob">Date Of Birth</label>
        <input type="date" class="form-control" id="dob" placeholder="dd/mm/yy">
        </div>

        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <label for="mobilenumber">Mobile Number</label>
            <input type="number" class="form-control" id="mobilenumber" placeholder="(999)-999-9999">
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
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection