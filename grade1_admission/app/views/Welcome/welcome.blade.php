<!DOCTYPE html>
<html lang="en">
<head>


    <link rel="stylesheet" type="text/css" href="{{ URL::asset('addApplication.css') }}">

    <meta charset="UTF-8">
    <title>User Form</title>



</head>
<body>


    <div id="titlePanel">
        <h1> My Profile  </h1>
    </div>

<div id="panel1">
        <h1> User Name  </h1>
    </div>

   {{Form :: open(array( 'url ' =>'/', 'method' => 'GET' ))}}

        {{Form::label('usernameLabel', 'User Name :      ');}}
        {{ Form :: text( 'usernameTest','')  }}



    {{ Form :: close() }}
</body>
</html>