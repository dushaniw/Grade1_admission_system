<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>


	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/screen7.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/pageStyle.css') }}">
<!--/*<style type="text/css">
/* LOOK AND FEEL */


/* END LOOK AND FEEL */</style>-->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="/include/form/form7.js?1504"></script>
</head>
<body>
<form method="get" id="FSForm" action="http://localhost/addNewStudent/submit" enctype="application/x-www-form-urlencoded" onsubmit="return Vromansys.Form.processSubmit(this);">
<div style="display:none;">
<input type="hidden" name="locid" value="gimhani/form2" />
<input type="hidden" name="EParam" value="AT1kKIiyxDx63BlaP/XbeYnjqh0+izcTGONOmeHEbhK0S6pOxmgzZjSswQF5/Rfx" />
<input type="hidden" name="ElapsedTime" id="ElapsedTime" value="0" />
<input type="hidden" name="Referrer" id="Referrer" value="" />
<input type="text" name="subject_line" id="subject_line" autocomplete="off" /><label for="subject_line">subject_line</label>
</div>

<!-- BEGIN_ITEMS -->
<div class="form_table">

<div class="clear"></div>

<div id="q0" class="q full_width">
<a class="item_anchor" name="ItemAnchor0"></a>
<div class="segment_header" style="width:auto;text-align:Center;"><h1 style="font-size:24px;padding:20px 1em ;">Add New Child</h1></div>
</div>

<div class="clear"></div>

<div id="q9" class="q full_width">
<a class="item_anchor" name="ItemAnchor1"></a>
<label class="question top_question" for="RESULT_TextField-1">Guardian</label>
<input type="text" name="RESULT_TextField-1" class="text_field read_only" id="RESULT_TextField-1"  size="25" maxlength="255" value={{$guardian_nic}} />
</div>
<div id="q10" class="q full_width">
<a class="item_anchor" name="ItemAnchor2"></a>
<label class="question top_question" for="RESULT_TextField-2">Applicant Id</label>
<input type="text" name="RESULT_TextField-2" class="text_field" id="RESULT_TextField-2"  size="25" maxlength="255" value="" />
</div>

<div class="clear"></div>

<div id="q3" class="q full_width">
<a class="item_anchor" name="ItemAnchor3"></a>
<label class="question top_question" for="RESULT_TextField-3">Name With Initials&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="RESULT_TextField-3" class="text_field" id="RESULT_TextField-3"  size="50" maxlength="255" value="" />
</div>
<div id="q2" class="q full_width">
<a class="item_anchor" name="ItemAnchor4"></a>
<label class="question top_question" for="RESULT_TextField-4">Student Full Name&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="RESULT_TextField-4" class="text_field" id="RESULT_TextField-4"  size="100" maxlength="255" value="" />
</div>

<div class="clear"></div>

<div id="q4" class="q full_width">
<a class="item_anchor" name="ItemAnchor5"></a>
<label class="question top_question" for="RESULT_RadioButton-5">Gender&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<select id="RESULT_RadioButton-5" name="RESULT_RadioButton-5" class="drop_down">
<option></option>
<option value="Female">Female</option>
<option value="Male">Male</option>
</select>
</div>
<div id="q5" class="q full_width">
<a class="item_anchor" name="ItemAnchor6"></a>
<label class="question top_question" for="RESULT_TextField-6">Religion&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="RESULT_TextField-6" class="text_field" id="RESULT_TextField-6"  size="25" maxlength="255" value="" />
</div>

<div class="clear"></div>

<div id="q7" class="q full_width">
<a class="item_anchor" name="ItemAnchor7"></a>
<label class="question top_question" for="RESULT_TextField-7">Date Of Birth&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="RESULT_TextField-7" class="text_field calendar_field" id="RESULT_TextField-7" size="10" maxlength="10" datemax="" datemin="" value="" date="yy-mm-dd" />


</div>
<div class="clear"></div>

</div>
<!-- END_ITEMS -->
<input type="hidden" name="EParam" value="FzpUCZwnDno=" />
<div class="outside_container">
<div class="buttons_reverse"><input type="submit" name="Submit" value="Submit" class="submit_button" id="FSsubmit" /></div></div>
</form>
</body>
</html>
