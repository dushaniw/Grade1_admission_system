<html>
<head>
	<title>Past Pupil Marking Criteria</title>
</head>
<body>
	{{Form :: open(array('url' =>'school/viewppmarkingcriteria','method' => 'POST' ))}}
		{{Form::label('schoolidlabel','School ID   :')}}
		{{Form::text('schoolidtext',$school->getSchool_id(), ['readonly'])}}
		{{Form::label('schoolnamelabel','School     :')}}
		{{Form::text('schoolnametext',$school->getSchool_name(), ['readonly'])}}
		<br>

		{{Form::label('yearlabel','Select year of admissions    :')}}
		{{Form::select('year', $years,$year);}}
		{{Form::submit('View criteria');}}
		<br><br>

		{{Form::label('eduAchlabel','Marks recommended for Educational Achievements during school:')}}
		<br><br>
		{{Form::label('intEduAchlabel','Marks for International Educational Achievements:')}}
		{{Form::text('intEduAchMarkstext',$ppmc->getInternationalEduAchieve(), ['readonly'])}}
		<br>
		{{Form::label('natEduAchlabel','Marks for National Educational Achievements:')}}
		{{Form::text('natEduAchMarkstext',$ppmc->getNationalEduAchieve(), ['readonly'])}}
		<br>
		{{Form::label('proEduAchlabel','Marks for Provincial Educational Achievements:')}}
		{{Form::text('proEduAchMarkstext',$ppmc->getProvincialEduAchieve(), ['readonly'])}}
		<br>
		{{Form::label('disEduAchlabel','Marks for District level Educational Achievements:')}}
		{{Form::text('disEduAchMarkstext',$ppmc->getDistrictEduAchieve(), ['readonly'])}}
		<br>
		{{Form::label('zonEduAchlabel','Marks for Zonal Educational Achievements:')}}
		{{Form::text('zonEduAchMarkstext',$ppmc->getZonalEduAchieve(), ['readonly'])}}
		<br>
		<br>
		{{Form::label('extAchlabel','Marks recommended for ExtraCurrricular Achievements during school:')}}
		<br><br>
		{{Form::label('intExtAchlabel','Marks for International ExtraCurrricular Achievements:')}}
		{{Form::text('intExtAchMarkstext',$ppmc->getInternationalExtraCurricular(), ['readonly'])}}
		<br>
		{{Form::label('natExtAchlabel','Marks for National ExtraCurrricular Achievements:')}}
		{{Form::text('natExtAchMarkstext',$ppmc->getNationalExtraCurricular(), ['readonly'])}}
		<br>
		{{Form::label('proExtAchlabel','Marks for Provincial ExtraCurrricular Achievements:')}}
		{{Form::text('proExtAchMarkstext',$ppmc->getProvincialExtraCurricular(), ['readonly'])}}
		<br>
		{{Form::label('disExtAchlabel','Marks for District level ExtraCurrricular Achievements:')}}
		{{Form::text('disExtAchMarkstext',$ppmc->getDistrictExtraCurricular(), ['readonly'])}}
		<br>
		{{Form::label('zonExtAchlabel','Marks for Zonal ExtraCurrricular Achievements:')}}
		{{Form::text('zonExtAchMarkstext',$ppmc->getZonalExtraCurricular(), ['readonly'])}}
		<br>
		<br>
		{{Form::label('pastPupOrglabel','Marks for being a Past Pupil Organization Member:')}}
		{{Form::text('pastPupOrgMarkstext',$ppmc->getPastPupilOrgMemeber(), ['readonly'])}}
		<br>
		{{Form::label('contributionlabel','Marks for donations to school development:')}}
		{{Form::text('contributionMarkstext',$ppmc->getContribution(), ['readonly'])}}
		
		<br>
		{{Form::label('otherlabel','Marks for other related:')}}
		{{Form::text('otherMarkstext',$ppmc->getOther_after_school(), ['readonly'])}}
		<br>
	 	
	{{ Form:: close()}}

</body>
</html>
