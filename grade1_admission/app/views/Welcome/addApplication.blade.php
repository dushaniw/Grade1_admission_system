<!DOCTYPE html>
<html lang="en">
<head>


    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/addApplication.css') }}">

    <meta charset="UTF-8">
    <title>Application Form</title>
    <


</head>
<body>


    <div id="titlePanel">
        <h1> Application Form  </h1>
    </div >


   {{Form :: open(array( 'url ' =>'/', 'method' => 'GET' ))}}

        {{Form::label('studentNameLabel', 'Student Name :      ');}}
        {{ Form :: text( 'studentNameTest','Student Name')  }}

        {{Form::label('guardianNameLabel', 'Guardian Name :      ');}}
        {{ Form :: text( 'guardianNameTest','Guardian Name')  }}



    {{ Form :: close() }}


    <div id="panel1">

        <div id="panel2">
            Select School List
            <br>
            {{Form::label('school1', 'School 1      :      ');}}
            &nbsp;&nbsp;
            {{ Form::select('school1Combo',array('cow','dog','cat'))}}

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{Form::label('school2', 'School 2      :      ');}}
            &nbsp;&nbsp;
            {{ Form::select('school2Combo',array('cow','dog','cat'))}}

            <br>
            {{Form::label('school3', 'School 3      :      ');}}
            &nbsp;&nbsp;
            {{ Form::select('school3Combo',array('cow','dog','cat'))}}
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{Form::label('school4', 'School 4      :      ');}}
            &nbsp;&nbsp;
            {{ Form::select('school4Combo',array('cow','dog','cat'))}}

            <br>
            {{Form::label('school5', 'School 5      :      ');}}
            &nbsp;&nbsp;
            {{ Form::select('school5Combo',array('cow','dog','cat'))}}

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{Form::label('school6', 'School 6      :      ');}}
            &nbsp;&nbsp;
            {{ Form::select('school6Combo',array('cow','dog','cat'))}}

        </div>

    </div>


    <h2> select type arcoording to the school then send</h2>

</body>
</html>