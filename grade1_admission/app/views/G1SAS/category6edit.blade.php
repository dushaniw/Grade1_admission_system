<html>
<head>
	<title>category 6</title>
</head>
<body>
	{{ Form :: open(array('url' =>'edit/editcategory6','method' => 'POST' ))}}


		{{Form::hidden('nic', $category6->getNIC())}}
	
		<h1>Childern of persons arriving after living abroad with child</h1>

		{{Form::label('Label6', 'a) Date returned to country ');}}

		 {{ Form :: text( 'dateOfReturned',$category6->getDateOfReturned()) ; }}		


		<br>		
		{{Form::label('Label7','b) Period of stay abroad');}}
		{{ Form :: text( 'PeriodOfStayAbroad',$category6->getPerioadAbroadStay()) ; }}		
			

		<br>	

		{{Form::label('Label8', 'Reason for stay ');}}
		<br>


        @if($category6->getReasonsForStay()==1)
        
	        {{Form::label('labler1', 'Sri lankan dutha mandala duty:     ');}}

	        {{ Form::radio('reason', '1',true); }}

	        {{Form::label('labelr2', 'Sri lankan goverment duty purpose:      ');}}

	        {{ Form::radio('reason', '2'); }}

	        {{Form::label('labelr3', 'Scholarship :      ');}}

	        {{ Form::radio('reason', '3');}}

	          {{Form::label('labelr4', 'Personal Reason :      ');}}

	        {{ Form::radio('reason', '4');}}
	        <br>
	    @elseif($category6->getReasonsForStay()==2)
	    
        
	        {{Form::label('labler1', 'Sri lankan dutha mandala duty:     ');}}

	        {{ Form::radio('reason', '1'); }}

	        {{Form::label('labelr2', 'Sri lankan goverment duty purpose:      ');}}

	        {{ Form::radio('reason', '2',true); }}

	        {{Form::label('labelr3', 'Scholarship :      ');}}

	        {{ Form::radio('reason', '3');}}

	          {{Form::label('labelr4', 'Personal Reason :      ');}}

	        {{ Form::radio('reason', '4');}}
	        <br>

	    @elseif($category6->getReasonsForStay()==3)    


	        {{Form::label('labler1', 'Sri lankan dutha mandala duty:     ');}}

	        {{ Form::radio('reason', '1'); }}

	        {{Form::label('labelr2', 'Sri lankan goverment duty purpose:      ');}}

	        {{ Form::radio('reason', '2'); }}

	        {{Form::label('labelr3', 'Scholarship :      ');}}

	        {{ Form::radio('reason', '3',true);}}

	          {{Form::label('labelr4', 'Personal Reason :      ');}}

	        {{ Form::radio('reason', '4');}}
	        <br>

	     @elseif($category6->getReasonsForStay()==4)   
	        
	        {{Form::label('labler1', 'Sri lankan dutha mandala duty:     ');}}

	        {{ Form::radio('reason', '1'); }}

	        {{Form::label('labelr2', 'Sri lankan goverment duty purpose:      ');}}

	        {{ Form::radio('reason', '2'); }}

	        {{Form::label('labelr3', 'Scholarship :      ');}}

	        {{ Form::radio('reason', '3');}}

	          {{Form::label('labelr4', 'Personal Reason :      ');}}

	        {{ Form::radio('reason', '4',true);}}
	        <br>
	     @endif

        {{Form::submit('edit category 6 detail')}}
	{{Form::close()}}
</body>
</html>