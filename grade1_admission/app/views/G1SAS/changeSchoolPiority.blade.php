<html>
<head>
	<title>Change Piority Level</title>
</head>
<body>
		  {{ Form:: open(array('role'=>'form','url' =>'edit/changepf','method' => 'POST' ))}}
               {{Form::hidden('applicantId',$applicantId)}}
               {{Form::hidden('size',sizeof($schools))}} 	


				<table border="1" cellpadding="5" cellspacing="5">
			<tr>
				<th>school name</th>
				<th>school Id</th>
				<th>Piority</th>
				
			</tr>
			@if(sizeof($schools)>=1)
			<tr>
				<td>		 {{ Form :: text( 'schoolN1',$schools[0]->getSchool_name()       ) ; }}		</td>
				<td>		 {{ Form :: text( 'schoolId1',$schools[0]->getSchool_id()) ; }}		</td>
				<td>		 
					<select class="form-school-control" name="piority1">
				        @for($i=1; $i<=sizeof($schools) ;$i++)
				        	@if($i==1)
				            	<option value="{{$i}}" selected="selected">{{$i}}</option>
				            @else
				            	<option value="{{$i}}" >{{$i}}</option>
				            @endif	
				        @endfor
	      			</select>

				</td>	
			<tr>
			@endif	

			@if(sizeof($schools)>=2)
			<tr>
				<td>		 {{ Form :: text( 'schoolN2',$schools[1]->getSchool_name()) ; }}		</td>
				<td>		 {{ Form :: text( 'schoolId2',$schools[1]->getSchool_id()) ; }}		</td>
				<td>		 

					<select class="form-school-control" name="piority2">
				        @for($i=1; $i<=sizeof($schools) ;$i++)
				        	@if($i==2)
				            	<option value="{{$i}}" selected="selected">{{$i}}</option>
				            @else
				            	<option value="{{$i}}" >{{$i}}</option>
				            @endif	
				        @endfor
	      			</select>

				</td>	
			<tr>
			@endif
			
			@if(sizeof($schools)>=3)	
			<tr>
				<td>		 {{ Form :: text( 'schoolN3',$schools[2]->getSchool_name()) ; }}		</td>
				<td>		 {{ Form :: text( 'schoolId3',$schools[2]->getSchool_id()) ; }}		</td>
				<td>		 
						<select class="form-school-control" name="piority3">
				        @for($i=1; $i<=sizeof($schools) ;$i++)
				        	@if($i==3)
				            	<option value="{{$i}}" selected="selected">{{$i}}</option>
				            @else
				            	<option value="{{$i}}" >{{$i}}</option>
				            @endif	
				        @endfor
	      			</select>


					</td>	
			<tr>	

			@endif	

			@if(sizeof($schools)>=4)

			<tr>
				<td>		 {{ Form :: text( 'schoolN4',$schools[3]->getSchool_name()) ; }}		</td>
				<td>		 {{ Form :: text( 'schoolId4',$schools[3]->getSchool_id()) ; }}		</td>
				<td>		 
						<select class="form-school-control" name="piority4">
				        @for($i=1; $i<=sizeof($schools) ;$i++)
				        	@if($i==4)
				            	<option value="{{$i}}" selected="selected">{{$i}}</option>
				            @else
				            	<option value="{{$i}}" >{{$i}}</option>
				            @endif	
				        @endfor
	      			</select>


						</td>	
			<tr>

			@endif
			
			@if(sizeof($schools)>=5)

			<tr>
				<td>		 {{ Form :: text( 'schoolN5',$schools[4]->getSchool_name()) ; }}		</td>
				<td>		 {{ Form :: text( 'schoolId5',$schools[4]->getSchool_id()) ; }}		</td>
				<td>		 
					<select class="form-school-control" name="piority5">
				        @for($i=1;$i<=sizeof($schools) ;$i++)
				        	@if($i==5)
				            	<option value="{{$i}}" selected="selected">{{$i}}</option>
				            @else
				            	<option value="{{$i}}" >{{$i}}</option>
				            @endif	
				        @endfor
	      			</select>



				</td>	
			<tr>

			@endif
			

			@if(sizeof($schools)>=6)
	
			<tr>
				<td>		 {{ Form :: text( 'schoolN6',$schools[5]->getSchool_name()) ; }}		</td>
				<td>		 {{ Form :: text( 'schoolId6',$schools[5]->getSchool_id()) ; }}		</td>
				<td>		 
					<select class="form-school-control" name="piority6">
				        @for($i=1;$i<=sizeof($schools) ;$i++)
				        	@if($i==6)
				            	<option value="{{$i}}" selected="selected">{{$i}}</option>
				            @else
				            	<option value="{{$i}}" >{{$i}}</option>
				            @endif	
				        @endfor
	      			</select>


				</td>	
			<tr>

			@endif
	
		</table>

		{{Form::submit('change piority')}}
		{{Form::close()}}


</body>
</html>