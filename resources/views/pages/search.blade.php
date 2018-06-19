@extends('layout.app')
@section('content')
    <div class="container">
        <h1> SEARCH </h1>
        {!! Form::open(['action'=>'Parent_register@update2','method' => 'GET'])!!}
        <div class="row searchFilter" >
            <div class="col-sm-12" >
                <div class="input-group" >
                     {{Form:: text ('id', '', ['class' => 'form-control', 'placeholder' => 'Enter Student Id'])}}
                    <input id="table_filter" type="text" class="form-control" aria-label="Text input with segmented button dropdown" >
                    <div class="input-group-btn" >
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Category
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">All</a></li>
                            <!-- <li><a tabindex="-1" href="#">Belt</a></li>-->

                            <li class="dropdown-submenu">
                                <a class="test" tabindex="-1" href="#">Belt<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="#">White</a></li>
                                    <li><a tabindex="-1" href="#">Yellow</a></li>
                                    <li><a tabindex="-1" href="#">Half Green</a></li>
                                    <li><a tabindex="-1" href="#">Green</a></li>
                                    <li><a tabindex="-1" href="#">Half Blue</a></li>
                                    <li><a tabindex="-1" href="#">Blue</a></li>
                                    <li><a tabindex="-1" href="#">Half Red</a></li>
                                    <li><a tabindex="-1" href="#">Red</a></li>
                                    <li><a tabindex="-1" href="#">Half Black</a></li>
                                    <li><a tabindex="-1" href="#">Black</a></li>
                                </ul>
                            </li>

                            <li><a tabindex="-1" href="#">Exam Information</a></li>
                            <li><a tabindex="-1" href="#">Fees Information</a></li>
                            <li><a tabindex="-1" href="#">Student Enrollment</a></li>
                            <li><a tabindex="-1" href="#">Attendence</a></li>
                            <li class="dropdown-submenu">
                                <a class="test" tabindex="-1" href="#">Class<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="#">Beginner</a></li>
                                    <li><a tabindex="-1" href="#">Intermediate</a></li>
                                    <li><a tabindex="-1" href="#">Advanced</a></li>

                                </ul>
                            </li>
                        </ul>

                        <button id="searchBtn" type="button" class="btn btn-secondary btn-search" ><span class="glyphicon glyphicon-search" >&nbsp;</span> <span class="label-icon" >Search</span></button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.dropdown-submenu a.test').on("click", function(e){
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>


@endsection