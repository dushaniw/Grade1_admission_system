<html>
<head>
	<title>	 login Form</title>
</head>

<body>

{{ Form:: open(array('url' =>'login','method' => 'POST' ))}}

        {{Form::label('userType', 'userType :      ');}}
        {{ Form:: select( 'userTypeA',array('Admin','school','normal user')) ; }}

       
	 <br>      
        {{Form::label('userNameLabel', 'User Name :      ');}}
        {{ Form:: text( 'userNameText','User Name') ; }}


        <br>
        {{Form::label('passwordLabel', 'Password :      ');}}
        {{Form::password('password');}}	

        <br>
        {{Form::submit('Login');}}	

{{ Form:: close()}}

{{ Form:: open(array('url' =>'guardian','method' => 'GET' ))}}

        <br>
        {{Form::label('Not Registered Yet:      ');}}

        <br>
        {{Form::submit('Sign Up');}}      

{{ Form:: close()}}

{{ Form:: open(array('url' =>'login/search','method' => 'POST' ))}}

        {{Form::label('searchLabel', 'Search for selected school:      ');}}
        
         <br>      
        {{Form::label('enterLabel', 'Enter child ID:      ');}}
        @if(Session::has('childId'))
                {{Form::text('childIDText',Session::get('childId'))}}
        @else
                {{ Form:: text( 'childIDText','') ; }}
        @endif

        <br>
        {{Form::submit('Search');}}  

        <br>
        {{Form::label('selectedLabel', 'Your School:      ');}}
        
        
        @if(Session::has('result'))
                {{Form::text('resultTextF',Session::get('result'))}}
        @else
                {{Form::text('resultTextF','')}}
        @endif
          

       

{{ Form:: close()}}


</body>
</html>