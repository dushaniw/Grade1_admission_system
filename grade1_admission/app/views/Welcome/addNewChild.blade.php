<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class=" svg"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- base href="https://fs8.formsite.com/gimhani/" -->
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@formsite">
<meta property="og:title" content="AddNewChild">
<meta property="og:type" content="website">
<meta property="og:url" content="https://fs8.formsite.com/gimhani/form2/index.html">
<meta property="og:site_name" content="FormSite">
<meta property="og:description" content="View this form on FormSite">
<meta property="og:image" content="https://www.formsite.com/apple-touch-icon.png">
<meta property="fb:admins" content="150429050199">
<title>AddNewChild</title>
<link rel="stylesheet" type="text/css" media="screen" href="addNewChild.blade_files/jquery-ui.css">
<link rel="stylesheet" type="text/css" media="all" href="addNewChild.blade_files/fonts7.css">
<link rel="stylesheet" type="text/css" media="all" href="addNewChild.blade_files/screen7.css">
<link rel="stylesheet" type="text/css" media="print" href="addNewChild.blade_files/print7.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="addNewChild.blade_files/responsive7.css">
<style type="text/css">
/* LOOK AND FEEL */
body{
	background: #F5F5F5;
	background-size: cover;
	font-family: 'Roboto',sans-serif;
	font-size: 13px;
}

.form_table{
	width: 650px;
	margin-left: auto;
	margin-right: auto;
	border-radius: 4px;
	border: 0px solid #CCCCCC;
	background: #FFFFFF;
	background-size: cover;
	color: #333333;
	overflow: hidden;
	box-shadow: 0 1px 6px rgba(0,0,0,0.30);
}

.form_table a, .outside a{
	color: #0D47A1;
}
.form_table a:visited, .outside a:visited{
	color: #0D47A1;
}

.segment_header{
	width: auto;
	margin: 1px;
	color: #FFFFFF;
	background: #2196F3;
	background-size: cover;
	background-repeat: repeat;
	background-position: 50% 50%;
	border-radius: 4px;
}

.segment_header h1{
	border-radius: 4px;
	padding: 20px 10px;
	font-family: 'Roboto',sans-serif;
}

.q{
	padding: 10px;
	margin-bottom: 1px;
	margin-left: 1px;
	float: left;
	display: block;
}

.q .question{
	font-weight: bold;
}

.q .left_question_first{
	width: 15em;
}

.required .icon{
	background-image: none;
	background-position: left;
	background-repeat: no-repeat;
	font-size: 13px;
	padding-left: 14px;
}

.q .text_field{ /* input:text, input:password, textarea */
	background: #FAFAFA;
	border: 1px solid #CCCCCC;
	border-radius: 2px;
	border-width: 1px;
	color: #333333;
	font-family: 'Roboto',sans-serif;
	font-size: 13px;
	margin: 1px 0;
	padding: 10px;
}

.q .file_upload{ /* input:file */
	background: #FAFAFA;
	border: 1px solid #CCCCCC;
	border-radius: 2px;
	border-width: 1px;
	color: #333333;
	font-family: 'Roboto',sans-serif;
	font-size: 13px;
	margin-top: 1px;
	padding: 10px;
}

.q .file_upload_button{ /* upload button */
	margin-top: 2px;
}

.q .inline_grid td{ /* multi-choice choices */
	padding: 5px;
	vertical-align: baseline;
}

.q .drop_down{ /* select */
	background: #FAFAFA;
	border: 1px solid #CCCCCC;
	border-radius: 2px;
	border-width: 1px;
	color: #333333;
	font-family: 'Roboto',sans-serif;
	font-size: 13px;
	margin: 1px 0;
	padding: 9px;
}

.q .matrix th{
	color: #FFFFFF;
	background: #64B5F6;
	padding: 5px;
	font-weight: bold;
	text-align: center;
	vertical-align: bottom;
}

.q .matrix td{
	padding: 5px;
	text-align: center;
	white-space: nowrap;
	height: 26px;
	border-bottom: 1px solid #CCCCCC;
	border-top: 1px solid #CCCCCC;
}

.q .matrix td.question{
	border-right: 1px solid #CCCCCC;
	font-weight: normal;
}

.q .matrix .multi_scale_sub th{
	font-weight: normal;
	border-top: 1px solid #CCCCCC !important;
	background: #999999;
}

.q .matrix .multi_scale_break{
	border-right: 1px solid #CCCCCC;
}

.q .matrix_row_dark td{
	color: #333333;
	background: #FAFAFA;
}
.q .matrix_row_dark td.question{
	color: #333333;
	background: #FAFAFA;
}

.q .matrix_row_light td{
	color: #333333;
	background: #FFFFFF;
}
.q .matrix_row_light td.question{
	color: #333333;
	background: #FFFFFF;
}

.q .rating_ranking td{
	padding: 5px;
}

.q .scroller{
	border: 1px solid #CCCCCC;
}

.highlight, tr.highlight td{ /* active item highlight */
	background: #FFF9C4 !important;
}

.outside{
	color: #333333;
}

.outside_container{
	width: 650px;
	padding: 1em 0;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	color: #333333;
}

.outside_container .submit_button{ /* submit buttons */
	color: #FFFFFF !important;
	background: #FF9800;
	background-size: auto;
	border-style: none;
	border-width: 1px;
	border-color: #FFFFFF;
	border-radius: 4px;
	text-align: center;
	font-family: 'Roboto',sans-serif;
	font-size: 14px;
	font-weight: bold;
	min-width: 30%;
	padding: 10px 20px;
	text-transform: uppercase;
	box-shadow: 0 1px 6px rgba(0,0,0,0.30);
}

.outside_container .submit_button:hover{
	background: #F57C00;
	border-color: #BBBBBB;
	background-size: auto;
}

.progressBarWrapper{
	border-radius: 4px;
	background: #FFFFFF;
	background-size: cover;
	border-color: #CCCCCC;
}

.progressBarBack{
	color: #FFFFFF;
	background-color: #FF9800;
}

.progressBarFront{
	color: #333333;
}

.ui-widget{
	font-family: 'Roboto',sans-serif;
}

.invalid{
	background: #FFEEEE;
}

.invalid .invalid_message{
	color: #FF0000;
	background: #FFEEEE;
	border: 1px solid #FF0000;
	border-radius: 2px;
}

.form_table.invalid{
	border: 2px solid #FF0000;
}

.invalid .matrix .invalid_row{
	background: #FFEEEE;
}
/* END LOOK AND FEEL */</style>
<script type="text/javascript" src="addNewChild.blade_files/jquery.js"></script>
<script type="text/javascript" src="addNewChild.blade_files/jquery-ui.js"></script>
<script type="text/javascript" src="addNewChild.blade_files/form7.js"></script>
</head>
<body>
<form method="post" id="FSForm" action="https://fs8.formsite.com/res/submit" enctype="application/x-www-form-urlencoded" onsubmit="return Vromansys.Form.processSubmit(this);">
<div style="display:none;">
<input name="locid" value="gimhani/form2" type="hidden">
<input name="EParam" value="AT1kKIiyxDx63BlaP/XbeYnjqh0+izcTGONOmeHEbhK0S6pOxmgzZjSswQF5/Rfx" type="hidden">
<input name="ElapsedTime" id="ElapsedTime" value="0" type="hidden">
<input name="Referrer" id="Referrer" value="" type="hidden">
<input name="subject_line" id="subject_line" autocomplete="off" type="text"><label for="subject_line">subject_line</label>
</div>

<!-- BEGIN_ITEMS -->
<div class="form_table">

<div class="clear"></div>

<div id="q0" class="q full_width">
<a class="item_anchor" name="ItemAnchor0"></a>
<div class="segment_header" style="width:auto;text-align:Center;"><h1 style="font-size:24px;padding:20px 1em ;">Add New Child</h1></div>
</div>

<div class="clear"></div>

<div id="q3" class="q required">
<a class="item_anchor" name="ItemAnchor1"></a>
<label class="question top_question" for="RESULT_TextField-1">Name With Initials&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input name="RESULT_TextField-1" class="text_field" id="RESULT_TextField-1" size="25" maxlength="255" type="text">
</div>
<div id="q2" class="q required">
<a class="item_anchor" name="ItemAnchor2"></a>
<label class="question top_question" for="RESULT_TextField-2">Student Full Name&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input name="RESULT_TextField-2" class="text_field" id="RESULT_TextField-2" size="25" maxlength="255" type="text">
</div>

<div class="clear"></div>

<div id="q4" class="q required">
<a class="item_anchor" name="ItemAnchor3"></a>
<label class="question top_question" for="RESULT_RadioButton-3">Gender&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<select id="RESULT_RadioButton-3" name="RESULT_RadioButton-3" class="drop_down">
<option selected="selected"></option>
<option value="Radio-0">Female</option>
<option value="Radio-1">Male</option>
</select>
</div>
<div id="q6" class="q required">
<a class="item_anchor" name="ItemAnchor4"></a>
<label class="question top_question" for="RESULT_RadioButton-4">Education Medium&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<select id="RESULT_RadioButton-4" name="RESULT_RadioButton-4" class="drop_down">
<option selected="selected"></option>
<option value="Radio-0">Sinhala</option>
<option value="Radio-1">Tamil</option>
<option value="Radio-2">English</option>
</select>
</div>

<div class="clear"></div>

<div id="q5" class="q required">
<a class="item_anchor" name="ItemAnchor5"></a>
<label class="question top_question" for="RESULT_TextField-5">Religion&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input name="RESULT_TextField-5" class="text_field" id="RESULT_TextField-5" size="25" maxlength="255" type="text">
</div>

<div class="clear"></div>

<div id="q7" class="q required">
<a class="item_anchor" name="ItemAnchor6"></a>
<label class="question top_question" for="RESULT_TextField-6">Date Of Birth&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
<input name="RESULT_TextField-6" class="text_field calendar_field hasDatepicker" id="RESULT_TextField-6" size="10" maxlength="10" datemax="" datemin="" date="yy-mm-dd" type="text"><img class="svg popup_button inline_button" src="addNewChild.blade_files/calendar.svg" alt="calendar" style="vertical-align:middle;">
<img class="gif popup_button inline_button" src="addNewChild.blade_files/calendar.gif" alt="calendar" style="vertical-align:middle;">

</div>
<div class="clear"></div>

<div style="position:relative;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:36px;text-align:left;background-color:#fafafa;height:35px;margin-top:10px;overflow:hidden;">
<a target="_top" tabindex="-1" style="position:absolute;color:#2c6a91;text-decoration:none;outline:none;min-width:210px;text-align:right;" onmouseover="this.style.backgroundColor='#f1f1f1'" onmouseout="this.style.backgroundColor='transparent'" href="https://www.formsite.com//?utm_source=formads&amp;utm_medium=footer&amp;utm_content=31T&amp;utm_campaign=formads"><img class="svg" src="addNewChild.blade_files/formsite_logo.svg" alt="FormSite.com" style="position:relative;top:9px;left:12px;border:0;height:16px;" align="left"><img class="gif" src="addNewChild.blade_files/footer_logo.gif" alt="FormSite.com" style="position:relative;top:4px;left:12px;border:0;height:28px;" align="left"><span style="display:inline;margin-right:10px;line-height:38px;font-family:Questrial, sans-serif;text-transform:uppercase;color:#a3a3a3;font-size:14px;letter-spacing:2px;white-space:nowrap;">PRO TRIAL</span></a><a style="position:absolute;padding: 0 12px;color:#2c6a91;outline:none;text-decoration:none;right:0;" tabindex="-1" target="_blank" onmouseover="this.style.backgroundColor='#f1f1f1'" onmouseout="this.style.backgroundColor='transparent'" href="https://www.formsite.com/form_app/FormSite?EParam=Dwsnv4qzZPqB66fs8gZt46LUUzh9HC4IG6dvSNxFOr963BlaP%2FXbecbXoygwKNSPfR7VNq6KpIAqbyodJ7JbwBLyZTCOtaAm%2FNnGP63uY9g%2Feu2OmJCwVBGdhKIU6BSElK767R65gEV9FSqrYyMFCbH3DL82cQx06NzSJFTTZ3xvDBll%2BhsX5NhBuMVSr%2Bg%2B" rel="nofollow">Report abuse</a>
</div>
</div>
<!-- END_ITEMS -->
<input name="EParam" value="FzpUCZwnDno=" type="hidden">
<div class="outside_container">
<div class="buttons_reverse"><input name="Submit" value="Submit" class="submit_button" id="FSsubmit" type="submit"></div></div>
</form>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>