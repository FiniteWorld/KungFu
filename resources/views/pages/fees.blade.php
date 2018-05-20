@extends('layout.app')
@section('content')
    <style>
        h1 {
            text-align: center;
            font-family: "serif";
            padding-top: 30px;
            padding-bottom: 30px;
        }

        input[type=text] {
            width: 30%;
            display: inline;
            margin-left: 20px;
        }

        .container {
            margin-left: 20px;
        }
    </style>
    <h1>FEE RECORD</h1>
    <div class="container">
        <form>
            <div class="form-group row">
                <label for="studentID" class="col-sm-2 col-form-label col-form-label-lg">Enter Student ID:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="studentID" placeholder="Enter Student ID">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Show records</button>
        </form>
    </div>

@endsection