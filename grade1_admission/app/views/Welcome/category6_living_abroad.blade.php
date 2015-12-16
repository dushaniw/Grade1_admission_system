<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

   <link rel="stylesheet" type="text/css" media = "all" href="css/screen7.css" />
    <style type="text/css" media="all">
        /* LOOK AND FEEL */
        body{
            background: #F5F5F5;
            background-size: cover;
            font-family: 'Roboto',sans-serif;
            font-size: 13px;
        }

 /*       .form_table{
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

        .form_table a{
            color: #0D47A1;
        }
*/
        .outside a{
            color: #0D47A1;
        }

        .form_table a:visited{
            color: #0D47A1;
        }

        .outside a:visited{
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

        .q .text_field{
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

        .q .file_upload{
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

        .q .file_upload_button{
            margin-top: 2px;
        }

        .q .inline_grid td{
            padding: 5px;
            vertical-align: baseline;
        }

        .q .drop_down{
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

        .highlight{
            background: #FFF9C4 !important;
        }

        tr.highlight td{
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

        .outside_container .submit_button{
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

    </style>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/include/form/form7.js?1504"></script>
</head>






<body>
<form method="post" id="FSForm" action="https://fs8.formsite.com/res/submit" enctype="multipart/form-data" onsubmit="return Vromansys.Form.processSubmit(this);">
    <div style="display:none;">
        <input type="hidden" name="locid" value="dusha1027/form2" />
        <input type="hidden" name="EParam" value="AT1kKIiyxDwsAm2FBdGL6Injqh0+izcTGONOmeHEbhIrdDcTvGF73FhU0xfEyp0z" />
        <input type="hidden" name="ElapsedTime" id="ElapsedTime" value="0" />
        <input type="hidden" name="Referrer" id="Referrer" value="" />
        <input type="text" name="subject_line" id="subject_line" autocomplete="off" /><label for="subject_line">subject_line</label>
    </div>

    <!-- BEGIN_ITEMS -->
    <div class="form_table">








        <div id="q116" class="q full_width">
            <a class="item_anchor" name="ItemAnchor49"></a>
            <div class="segment_header" style="width:auto;text-align:Left;"><h1 style="font-weight:bold;font-size:18px;padding:20px 1em ;">Childern of persons arriving after living abroad with child</h1></div>
        </div>

        <div class="clear"></div>

        <div id="q117" class="q required">
            <a class="item_anchor" name="ItemAnchor50"></a>
            <label class="question top_question" for="RESULT_TextField-50">a) Date returned to country&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
            <input type="text" name="RESULT_TextField-50" class="text_field calendar_field" id="RESULT_TextField-50" size="10" maxlength="10" datemax="" datemin="" value="" date="yy-mm-dd" /><img class="svg popup_button inline_button" src="/images/icons/formIcons/calendar.svg" alt="calendar" style="vertical-align:middle;"/>
            <img class="gif popup_button inline_button" src="images/calendar.gif" alt="calendar" style="vertical-align:middle;"/>

        </div>

        <div class="clear"></div>

        <div id="q118" class="q full_width">
            <a class="item_anchor" name="ItemAnchor51"></a>
            <div class="full_width_space"><div><strong>b) Period of stay abroad<br /></strong></div></div>
        </div>

        <div class="clear"></div>

        <div id="q119" class="q required">
            <a class="item_anchor" name="ItemAnchor52"></a>
            <label class="question top_question" for="RESULT_TextField-52">From :&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
            <input type="text" name="RESULT_TextField-52" class="text_field calendar_field" id="RESULT_TextField-52" size="25" maxlength="10" datemax="" datemin="" value="" date="yy-mm-dd" /><img class="svg popup_button inline_button" src="/images/icons/formIcons/calendar.svg" alt="calendar" style="vertical-align:middle;"/>
            <img class="gif popup_button inline_button" src="images/calendar.gif" alt="calendar" style="vertical-align:middle;"/>

        </div>
        <div id="q120" class="q required">
            <a class="item_anchor" name="ItemAnchor53"></a>
            <label class="question top_question" for="RESULT_TextField-53">To :&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
            <input type="text" name="RESULT_TextField-53" class="text_field calendar_field" id="RESULT_TextField-53" size="25" maxlength="10" datemax="" datemin="" value="" date="yy-mm-dd" /><img class="svg popup_button inline_button" src="/images/icons/formIcons/calendar.svg" alt="calendar" style="vertical-align:middle;"/>
            <img class="gif popup_button inline_button" src="images/calendar.gif" alt="calendar" style="vertical-align:middle;"/>

        </div>

        <div class="clear"></div>

        <div id="q122" class="q full_width">
            <a class="item_anchor" name="ItemAnchor54"></a>
            <div class="full_width_space"><div><strong>c)</strong></div></div>
        </div>

        <div class="clear"></div>

        <div id="q121" class="q required">
            <a class="item_anchor" name="ItemAnchor55"></a>
            <span class="question top_question">&nbsp;<b class="icon_required" style="color:#FF0000">*</b></span>
            <table class="matrix">
                <tr>
                    <th scope="col">&nbsp;</th><th scope="col">Sri lankan dutha mandala duty</th><th scope="col">Sri lankan goverment duty purpose</th><th scope="col">Scholarship</th><th scope="col">Personal reasons</th>
                </tr>
                <tr class="matrix_row_light">
                    <td class="question">Reasons for staying abroad</td>
                    <td><label for="RESULT_RadioButton-55-0-0" class="accessibility_hidden">Sri lankan dutha mandala duty</label><input type="radio" name="RESULT_RadioButton-55-0" class="multiple_choice" id="RESULT_RadioButton-55-0-0" value="Radio-0" /></td>
                    <td><label for="RESULT_RadioButton-55-0-1" class="accessibility_hidden">Sri lankan goverment duty purpose</label><input type="radio" name="RESULT_RadioButton-55-0" class="multiple_choice" id="RESULT_RadioButton-55-0-1" value="Radio-1" /></td>
                    <td><label for="RESULT_RadioButton-55-0-2" class="accessibility_hidden">Scholarship</label><input type="radio" name="RESULT_RadioButton-55-0" class="multiple_choice" id="RESULT_RadioButton-55-0-2" value="Radio-2" /></td>
                    <td><label for="RESULT_RadioButton-55-0-3" class="accessibility_hidden">Personal reasons</label><input type="radio" name="RESULT_RadioButton-55-0" class="multiple_choice" id="RESULT_RadioButton-55-0-3" value="Radio-3" /></td>
                </tr>
            </table>
        </div>

        <div class="clear"></div>

        <div id="q123" class="q required">
            <a class="item_anchor" name="ItemAnchor56"></a>
            <label class="question top_question" for="RESULT_TextField-56">d) No of schools located where the child could be admitted and located closer to the place of residence other than the school applied for&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
            <input type="text" name="RESULT_TextField-56" class="text_field" id="RESULT_TextField-56"  size="25" maxlength="25" value="" />
        </div>
        </div>
    <!-- END_ITEMS -->
    <input type="hidden" name="EParam" value="FzpUCZwnDno=" />
    <div class="outside_container">
        <div class="buttons_reverse"><input type="submit" name="Submit" value="Submit" class="submit_button" id="FSsubmit" /></div>
    </div>
</form>
</body>
</html>
