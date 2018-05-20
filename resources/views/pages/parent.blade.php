@extends('layout.app')
@section('content')
    <h1 style="padding-top: 20px; text-align: center; font-family: 'Serif'">REGISTER PARENT</h1>
    <div class="container">

        <form action="/action_page.php">
            <div class="form-group">

                <label for="SID">Student ID</label>

                <input list="SID" class="form-control" name="SID">
                <datalist id="SID">

                    <option value="abc">
                    <option value="def">
                    <option value="ghi">
                    <option value="jkl">
                    <option value="mno">
                    <option value="pqr">
                    <option value="stu">
                    <option value="vwx">
                </datalist>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="parent">First Name:</label>
                    <input type="text" class="form-control" id="pfname" placeholder="Your First Name">
                </div>

                <div class="form-group col-md-6">
                    <label for="parent">Last Name:</label>
                    <input type="text" class="form-control" id="plname" placeholder="Your Last Name">
                </div>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input"type="radio" name="relation" id="mother" value="mother">
                <label for="mother" class="form-check-label">Mother</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="relation" id="father" value="father">
                <label for="father" class="form-check-label">Father</label>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="contact">Contact No:</label>
                    <input type="tel" class="form-control" id="contact" placeholder="(###) ###-####" name="contact">
                </div>
            </div>
            <div align=center>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
@endsection