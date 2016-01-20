@extends('G1SAS/layouts/normal_user_layout')

@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
  <ul class="nav navbar-nav" >
    <li class> <a href="/userpage/home?username=<?php echo $username ?>">Home</a></li>
    <li>{{HTML::link('#', 'About')}}  </li>
    
    <li> <a href="/child/childrenoverview?username=<?php echo $username ?>">My Children</a></li>
    <li class="active"><a href = "/selectSchool?username=<?php echo $username ?>">My Applications </a></li>
    <li><a href-"#">Search</a></li>
  </ul>
    <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $username?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
</nav>


   @if(Session::has('error'))
    <div class="alert alert-danger">
        {{Session::get('error')}}
    </div>
  @endif

<div class="row">
  <div class="col-md-3">
    <br/>
    <ul class = "nav nav-pills nav-stacked" role = "navigation">
      <li><a href = "#">Overview</a></li>
      <li class = "active"><a href = "/selectSchool?username=<?php echo $username ?>">Add New Application</a></li>
    </ul>
  </div>
  <div class = "col-md-9">
                <div class = "panel panel-primary panel-transparent">
                        <div class ="panel-heading">
                                <h3 class="panel-title"> <p class="text-center"><span class = "glyphicon glyphicon-edit"></span> Add New Application </p></h3>
                        </div>
                        <div class = "panel-body"> <div class = "col-md-10">
                          {{ Form:: open(array('url' =>'selectSchool/next','method' => 'GET','role'=>'form'))}}
                             {{Form::hidden('guardian', $guardian->getEmail())}}
                             {{Form::hidden('username',$username)}}
                          <div class = "form-group">
                               {{Form::label('appplicantsCombo','Select Applicant      ')}}
                               <select name="applicant_id"  class="form-control">
                                @foreach($applicants as $applicant)

                              <option value="{{$applicant->getApplicantId()}}">{{$applicant->getFirstName()}}</option>
                                @endforeach
                              </select>
                          </div>
                          <br>
                          <div class = "form-group">
                          <h3><span class = "label label-warning"> Select your six schools </span></h3>
                          </div>
                          
                          <div class = "form-group">
                                {{Form::label('school1label', 'School 1    ')}}
                                <select class="form-control" name="school_name1">
                                  @foreach($schools as $school)
                                     <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                                  @endforeach
                                </select>
                          </div>
                          
                          <div class = "form-group">
                                {{Form::label('school2label', 'School 2    ')}} 
                                <select class="form-control" name="school_name2">
                                    @foreach($schools as $school)
                                      <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                                    @endforeach
                                </select>   

                          </div>
                        
                          <div class = "form-group">
                            {{Form::label('school3label', 'School 3    ')}}   
                                <select class="form-control" name="school_name3">
                                  @foreach($schools as $school)
                                   <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                                  @endforeach
                                </select>
                          </div>
                        
                          <div class = "form-group">
                                {{Form::label('school4label', 'School 4    ')}}
                                  <select class="form-control" name="school_name4">
                                  @foreach($schools as $school)
                                    <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                                  @endforeach
                                  </select>
                          </div>
                          
                          <div class = "form-group">
                               {{Form::label('school5label', 'School 5    ')}}
                                  <select class="form-control" name="school_name5">
                                    @foreach($schools as $school)
                                      <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                                    @endforeach
                                  </select>
                          </div>
                          
                          <div class = "form-group">
                                  {{Form::label('school6label', 'School 6    ')}}
                                  <select class="form-control" name="school_name6">
                                  @foreach($schools as $school)
                                        <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                                  @endforeach
                                     </select>
                          </div>
                          <br/>
                          <div class = "form-group">
                            <h3><span class = "label label-warning"> Select 10 other closest schools to you instead of selected schools</span></h3>
                           
                          </div>
                        
                          <div class="form-group">
                                  {{Form::label('schoollabel', 'School     ')}}   
                                <select class="form-control" name="school_name7">
                                    @foreach($schools as $school)
                                      <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                                                   @endforeach
                                  </select>   

                          </div>
                         
                          <div class="form-group">
                              {{Form::label('schoollabel', 'School     ')}}   
                            <select class="form-control" name="school_name8">
                                @foreach($schools as $school)
                                  <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                                @endforeach
                            </select>
                          </div>
                         
                          <div class="form-group">
                              {{Form::label('schoollabel', 'School     ')}}   
                                <select class="form-control" name="school_name9">
                                @foreach($schools as $school)
                                   <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                                @endforeach
                                  </select>
                          </div>
                        
                          <div class="form-group">
                               {{Form::label('schoollabel', 'School     ')}}   
                            <select class="form-control" name="school_name10">
                                @foreach($schools as $school)
                                  <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                                 @endforeach
                            </select>
                          </div>
                         


                          <div class="form--group">
                            {{Form::label('schoollabel', 'School     ')}}   
                            <select class="form-control" name="school_name11">
        @foreach($schools as $school)
            <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
        @endforeach
                            </select>
                          </div>
                          
                          <div class="form-group">
                                  {{Form::label('schoollabel', 'School     ')}}   
                                  <select class="form-control" name="school_name12">
                                @foreach($schools as $school)
                                    <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                               @endforeach
                                    </select>
                          </div>
                          
                          <div class="form-group">
                                {{Form::label('schoollabel', 'School     ')}}   
                                    <select class="form-control" name="school_name13">
                                    @foreach($schools as $school)
                                      <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                                     @endforeach
                                      </select>
                          </div>
                    
                           <div class="form-group">
                              {{Form::label('schoollabel', 'School     ')}}   
                                  <select class="form-control" name="school_name14">
                                        @foreach($schools as $school)
                                                <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                                        @endforeach
                                    </select>
                            </div>
                    
                                <div class="form-group">
                                   {{Form::label('schoollabel', 'School     ')}}   
                                      <select class="form-control" name="school_name15">
                                         @foreach($schools as $school)
                                                 <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                                          @endforeach
                                       </select>
                                </div>
                    
                            <div class="form-group">
                                {{Form::label('schoollabel', 'School     ')}}   
                                    <select class="form-control" name="school_name16">
                                  @foreach($schools as $school)
                                          <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
                               @endforeach
                                 </select>
                               </div>
                                <br/>
                            <div class = "form-group">
                            <h3><span class = "label label-warning">Select electrocal list details for last five year</span></h3>
                           
                          </div>

                           <div class="form-group">
                                {{Form::label('division number', 'Division')}}   
                                    <select class="form-control" name='Year1d'>
                                    @foreach($divisions as $division)
                                      
                                    
                                        <option value="{{$division->getGrama_niladari_div_no()}}" >{{$division->getName()}}</option>
                                     


                                   @endforeach
                                   </select>
                                    {{Form::label('year ', 'Year     ')}}
                              {{Form::selectRange('year1', 2010, 2015,2015,['class'=>'form-control','style'=>'width: 100px' ])}}
                              </div>


                                <br/>
                           <div class = "form-group">
                                     {{Form::label('division number', 'Division')}}   
                                       <select class="form-control" name='Year2d'>
          @foreach($divisions as $division)
            <option value="{{$division->getGrama_niladari_div_no()}}">{{$division->getName()}}</option>
          @endforeach
                                      </select>
                                    {{Form::label('year ', 'Year     ')}}
                                    {{Form::selectRange('year2', 2010, 2015,2015,['class'=>'form-control','style'=>'width: 100px' ])}}
                            </div>
                             <br/>
   
                           <div class = "form-group">
                                      {{Form::label('division number', 'Division')}}   
                                    <select class="form-control" name='Year3d'>
                                            @foreach($divisions as $division)
                                                  <option value="{{$division->getGrama_niladari_div_no()}}">{{$division->getName()}}</option>
                                             @endforeach
                                        </select>

                                    {{Form::label('year ', 'Year     ')}}
                                    {{Form::selectRange('year3', 2010, 2015,2015,['class'=>'form-control','style'=>'width: 100px' ])}}
                            </div>

                               <br/>
                            <div class = "form-group">
                                      {{Form::label('division number', 'Division')}}   
                                      <select class="form-control" name='Year4d'>
                                              @foreach($divisions as $division)
                                                    <option value="{{$division->getGrama_niladari_div_no()}}">{{$division->getName()}}</option>
                                              @endforeach
                                      </select>
                                    {{Form::label('year ', 'Year     ')}}
                                      {{Form::selectRange('year4', 2010, 2015,2015,['class'=>'form-control','style'=>'width: 100px' ])}}
                            </div>
                             <br/>
                            <div class = "form-group">
                                    {{Form::label('division number', 'Division')}}   
                                      <select class="form-control" name='Year5d'>
                                      @foreach($divisions as $division)
                                        <option value="{{$division->getGrama_niladari_div_no()}}">{{$division->getName()}}</option>
                                       @endforeach
                                      </select>
                                    {{Form::label('year ', 'Year     ')}}
                                    {{Form::selectRange('year5', 2010, 2015,2015,['class'=>'form-control','style'=>' width: 100px' ])}}
                                </div>
                                   <br/>
                    
                        <div class ="form-group">
                            {{Form::submit('Next',array('class' => 'btn btn-primary' ))}}
                          </div>

      {{ Form:: close()}}

                       </div></div>
                </div>
  </div>

</div>
	
 





  
@stop