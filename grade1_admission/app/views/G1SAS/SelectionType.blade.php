@extends('G1SAS/layouts/normal_user_layout')

@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
  <ul class="nav navbar-nav" >
    <li class> <a href="/userpage/home?username=<?php echo $username ?>">Home</a></li>
    <li>{{HTML::link('#', 'About')}}  </li>
    
    <li> <a href="/child/childrenoverview?username=<?php echo $username ?>">My Children</a></li>
    <li class="active"><a href = "" class="disabled" style="color: #3366FF" >My Applications </a></li>
    <li><a href-"#">Search</a></li>
  </ul>
    <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $username?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
</nav>

<div class="row">
  <div class="col-md-3">
    <br/>
    <ul class = "nav nav-pills nav-stacked" role = "navigation">
      <li><a href = "#">Overview</a></li>
      <li class = "active"><a href = "" class="disabled" style="color: #3366FF" >Add New Application</a></li>
    </ul>
  </div>
  <div class = "col-md-9">
                <div class = "panel panel-primary panel-transparent">
                        <div class ="panel-heading">
                                <h3 class="panel-title"> <p class="text-center"><span class = "glyphicon glyphicon-edit"></span> Add New Application </p></h3>
                        </div>
                        <div class = "panel-body"> <div class = "col-md-10">
                        	@for($i=0;$i<6;$i++)
								{{ Form:: open(array('url' =>'selectSchool/application','method' => 'POST'))}}
			
								{{Form::hidden('username',$username)}}


								{{Form::hidden('schoolId1', $schools[6]->getSchool_id())}}
								{{Form::hidden('schoolId2', $schools[7]->getSchool_id())}}
								{{Form::hidden('schoolId3', $schools[8]->getSchool_id())}}
								{{Form::hidden('schoolId4', $schools[9]->getSchool_id())}}
								{{Form::hidden('schoolId5', $schools[10]->getSchool_id())}}
								{{Form::hidden('schoolId6', $schools[11]->getSchool_id())}}
								{{Form::hidden('schoolId7', $schools[12]->getSchool_id())}}
								{{Form::hidden('schoolId8', $schools[13]->getSchool_id())}}
								{{Form::hidden('schoolId9', $schools[14]->getSchool_id())}}
								{{Form::hidden('schoolId10', $schools[15]->getSchool_id())}}
	
								{{Form::hidden('division1', $dArray[0])}}
								{{Form::hidden('division2', $dArray[1])}}
								{{Form::hidden('division3', $dArray[2])}}
								{{Form::hidden('division4', $dArray[3])}}
								{{Form::hidden('division5', $dArray[4])}}
								{{Form::hidden('division6', $dArray[5])}}

								{{Form::hidden('year1', $yArray[0])}}
								{{Form::hidden('year2', $yArray[1])}}
								{{Form::hidden('year3', $yArray[2])}}
								{{Form::hidden('year4', $yArray[3])}}
								{{Form::hidden('year5', $yArray[4])}}
								{{Form::hidden('year6', $yArray[5])}}

								{{Form::hidden('guardianNic', $guardian->getNic())}}
								{{Form::hidden('applicant_id', $applicant->getApplicantId())}}

								{{Form::hidden('schoolPiority', $i);}}
								{{Form::hidden('schoolId', $schools[$i]->getSchool_id())}}

								<div class="form-group">
									<h3><span class = "label label-warning">School <?php echo $i+1?></span></h3>

								</div>

								<div class="form-group">
			
								{{Form::label('schoolNameL', 'School Name    ')}}
								{{Form::text('schoolNameT', $schools[$i]->getSchool_name(),array('class' =>'form-control','required','readonly') )}}
								
								</div>

								<div class="form-group">
									{{Form::label('distanceL', 'Distance School (km)  ')}}
								{{Form::text('distanceT',null,array('class' =>'form-control','required','style'=>'width: 150px') )}}
				

								</div>

								<div class="form-group">

								{{Form::label('MediumL', 'Medium    ')}}
								{{Form::select('MediumT', array('Sinhala','Tamil'),null,array('class' =>'form-control','style'=>'width: 150px','required') )}}

								</div>

								<div class="form-group">

								{{Form::label('appTypeL', 'Application Type ')}}

								{{ Form::select('type', array('Children of residents in close proximity of school ','Children of Past Pupils','Brothers/sisters of students who are studying in school at present','Childern of persons belonging to staff in institution directly involved in school education ',' Children of officers transfferd on exigencies of service ','Childern of persons arriving after living abroad with child'),null,array('class' =>'form-control','required'))}}

								</div>

								<div class="form-group">

									{{Form::submit('Apply',array('class' => 'btn btn-primary' ))}}

								</div>

								{{Form::close()}}
											</br>

									@endfor

								{{ Form:: open(array('url' =>'/selectSchool/back','method' => 'POST'))}}
								{{Form::hidden('username',$username)}}
								{{Form::hidden('schoolId1', $schools[6]->getSchool_id())}}
								{{Form::hidden('schoolId2', $schools[7]->getSchool_id())}}
								{{Form::hidden('schoolId3', $schools[8]->getSchool_id())}}
								{{Form::hidden('schoolId4', $schools[9]->getSchool_id())}}
								{{Form::hidden('schoolId5', $schools[10]->getSchool_id())}}
								{{Form::hidden('schoolId6', $schools[11]->getSchool_id())}}
								{{Form::hidden('schoolId7', $schools[12]->getSchool_id())}}
								{{Form::hidden('schoolId8', $schools[13]->getSchool_id())}}
								{{Form::hidden('schoolId9', $schools[14]->getSchool_id())}}
								{{Form::hidden('schoolId10', $schools[15]->getSchool_id())}}
	
								{{Form::hidden('division1', $dArray[0])}}
								{{Form::hidden('division2', $dArray[1])}}
								{{Form::hidden('division3', $dArray[2])}}
								{{Form::hidden('division4', $dArray[3])}}
								{{Form::hidden('division5', $dArray[4])}}
								{{Form::hidden('division6', $dArray[5])}}

								{{Form::hidden('year1', $yArray[0])}}
								{{Form::hidden('year2', $yArray[1])}}
								{{Form::hidden('year3', $yArray[2])}}
								{{Form::hidden('year4', $yArray[3])}}
								{{Form::hidden('year5', $yArray[4])}}
								{{Form::hidden('year6', $yArray[5])}}

								{{Form::hidden('guardianNic', $guardian->getNic())}}
								{{Form::hidden('applicant_id', $applicant->getApplicantId())}}

								{{Form::hidden('schoolPiority', $i);}}
								{{Form::hidden('schoolId', $schools[$i]->getSchool_id())}}

								{{Form::submit('Back',array('class' => 'btn btn-primary','style'=>'position:absolute; right:500px; top:2487px ' ))}}
								{{Form::close()}}
						
					


						




                        </div></div>
                </div>
  </div>
	

	


         
</div>
	
 





  
@stop