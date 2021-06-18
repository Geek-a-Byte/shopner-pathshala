@extends('layouts.auth')

@section('content')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        input[type=text],
        input[type=textarea],
        input[type=number],
        input[type=email],
        input[type=phone],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: left;

        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 50px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .centerheader {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>

</head>

<body>

    <div class="container">
        <form method="post" action="{{ route('teacher.create.course.store') }}">
            @csrf

            <div class="row">
                <div class="col-25">
                    <label for="Category">Select Course Category</label>
                </div>
                <div class="col-75">
                    <select id="category" name="course_category">
                        <option value="Writing">Writing</option>
                        <option value="Recognization">Recognization</option>
                        <option value="Reading">Reading</option>
                        <option value="Memory">Memory</option>
                        <option value="Math">Math</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="level">Select Course Level</label>
                </div>
                <div class="col-75">
                    <select id="level" name="course_level">
                        <option value="easy">Easy</option>
                        <option value="medium">Medium</option>
                        <option value="hard">Hard</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Link">Course Content Link</label>
                </div>
                <div class="col-75">
                    <input type="textarea" id="name" name="course_link" placeholder="Sway link">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create Course') }}
                    </button>
                </div>
            </div>


        </form>

    </div>

    <div class="container">
        <form method="post" action="{{ route('teacher.create.test.store') }}">
            @csrf

            <div class="row">
                <div class="col-25">
                    <label for="Category">Select Course Code</label>
                </div>
                <!-- <div class="col-75">
                    <select id="category" name="course_category">
                        <option value="writing">Writing</option>
                        <option value="emotion">Emotion</option>
                        <option value="math">Math</option>
                    </select>
                </div> -->
                <?php

                @include public_path('includes/connection.php');

                //$sql="SELECT name,id FROM student"; 

                //$sql = "SELECT name,id FROM student order by name";

                /* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

                /*
                echo "<select name=student value=''>Student Name</option>"; // list box select command

                foreach ($dbo->query($sql) as $row) { //Array or records stored in $row

                    echo "<option value=$row[id]>$row[name]</option>";

                    // Option values are added by looping through the array 
                }

                echo "</select>"; // Closing of list box
                */
                ?>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="Link">Test Link</label>
                </div>
                <div class="col-75">
                    <input type="textarea" id="name" name="test_link" placeholder="Form link">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create Test') }}
                    </button>
                </div>
            </div>


        </form>

    </div>

</body>

</html>
@endsection