<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

    <link rel="stylesheet" type="text/css" media="all" href="css/screen7.css" />
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
        /*the styles i have added*/

        .full_width {   /*from screen7*/
            padding-left: 0px !important;
            padding-right: 0px !important;
            padding-top: 0px !important;
            margin-left: 0px !important;
            margin-right: 0px !important;
            width: 100%;
        }

        .clear {        /*from screen7*/
            clear:both;
            margin:0;
            padding:0;
        }



        /*default code*/
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
<form method="post" id="FSForm" action="localhost/cat1" enctype="multipart/form-data" onsubmit="return Vromansys.Form.processSubmit(this);">
    <div style="display:none;">
        <input type="hidden" name="locid" value="dusha1027/form2" />
        <input type="hidden" name="EParam" value="AT1kKIiyxDwsAm2FBdGL6Injqh0+izcTGONOmeHEbhIrdDcTvGF73FhU0xfEyp0z" />
        <input type="hidden" name="ElapsedTime" id="ElapsedTime" value="0" />
        <input type="hidden" name="Referrer" id="Referrer" value="" />
        <input type="text" name="subject_line" id="subject_line" autocomplete="off" /><label for="subject_line">subject_line</label>
    </div>

    <!-- BEGIN_ITEMS -->
    <div class="form_table">
<div class="clear"></div>
<div id="q49" class="q full_width">
    <a class="item_anchor" name="ItemAnchor27"></a>
    <div class="segment_header" style="width:auto;text-align:Left;"><h1 style="font-weight:bold;font-size:18px;padding:20px 1em ;">Childern of persons belonging to staff in institution directly involved in school education</h1></div>
</div>

<div class="clear"></div>

<div id="q70" class="q full_width">
    <a class="item_anchor" name="ItemAnchor28"></a>
    <div class="full_width_space"><div><strong>a)</strong></div></div>
</div>

<div class="clear"></div>

<div id="q50" class="q">
    <a class="item_anchor" name="ItemAnchor29"></a>
    <label class="question top_question" for="RESULT_TextField-29">Post held as permanent employee in the relevant institutions</label>
    <input type="text" name="RESULT_TextField-29" class="text_field" id="RESULT_TextField-29"  size="25" maxlength="255" value="" />
</div>
<div id="q52" class="q">
    <a class="item_anchor" name="ItemAnchor30"></a>
    <label class="question top_question" for="RESULT_TextField-30">Period of service</label>
    <input type="text" name="RESULT_TextField-30" class="text_field" id="RESULT_TextField-30"  size="25" maxlength="25" value="" />
</div>

<div class="clear"></div>

<div id="q53" class="q">
    <a class="item_anchor" name="ItemAnchor31"></a>
    <label class="question top_question" for="RESULT_TextField-31">b) Distance from place of residence to place of work</label>
    <input type="text" name="RESULT_TextField-31" class="text_field" id="RESULT_TextField-31"  size="25" maxlength="255" value="" />
</div>

<div class="clear"></div>

<div id="q55" class="q">
    <a class="item_anchor" name="ItemAnchor32"></a>
    <label class="question top_question" for="RESULT_TextField-32">c) If serving presently in a difficult school, period of difficult school service</label>
    <input type="text" name="RESULT_TextField-32" class="text_field" id="RESULT_TextField-32"  size="25" maxlength="255" value="" />
</div>

<div class="clear"></div>

<div id="q56" class="q">
    <a class="item_anchor" name="ItemAnchor33"></a>
    <label class="question top_question" for="RESULT_TextField-33">d) If served earlier in a in a difficult school such period of service</label>
    <input type="text" name="RESULT_TextField-33" class="text_field" id="RESULT_TextField-33"  size="25" maxlength="255" value="" />
</div>

<div class="clear"></div>

<div id="q102" class="q full_width">
    <a class="item_anchor" name="ItemAnchor34"></a>
    <div class="full_width_space"><div><strong>e) Un-utilized leaves</strong></div></div>
</div>

<div class="clear"></div>

<div id="q101" class="q">
    <a class="item_anchor" name="ItemAnchor35"></a>
    <span class="question top_question"></span>
    <table class="matrix">
        <tr>
            <th scope="col">&nbsp;</th><th scope="col">2015</th><th scope="col">2014</th><th scope="col">2013</th><th scope="col">2012</th><th scope="col">2011</th></tr>
        <tr class="matrix_row_light">
            <td class="question">un-utilized Leaves</td>
            <td><label class="accessibility_hidden" for="RESULT_MatrixTextField-35-0">2015</label><input type="text" name="RESULT_MatrixTextField-35-0" class="text_field" id="RESULT_MatrixTextField-35-0" size="8" maxlength="255" value="" /></td>
            <td><label class="accessibility_hidden" for="RESULT_MatrixTextField-35-1">2014</label><input type="text" name="RESULT_MatrixTextField-35-1" class="text_field" id="RESULT_MatrixTextField-35-1" size="8" maxlength="255" value="" /></td>
            <td><label class="accessibility_hidden" for="RESULT_MatrixTextField-35-2">2013</label><input type="text" name="RESULT_MatrixTextField-35-2" class="text_field" id="RESULT_MatrixTextField-35-2" size="8" maxlength="255" value="" /></td>
            <td><label class="accessibility_hidden" for="RESULT_MatrixTextField-35-3">2012</label><input type="text" name="RESULT_MatrixTextField-35-3" class="text_field" id="RESULT_MatrixTextField-35-3" size="8" maxlength="255" value="" /></td>
            <td><label class="accessibility_hidden" for="RESULT_MatrixTextField-35-4">2011</label><input type="text" name="RESULT_MatrixTextField-35-4" class="text_field" id="RESULT_MatrixTextField-35-4" size="8" maxlength="255" value="" /></td>
        </tr>
    </table>

</div>

<div class="clear"></div>

<div id="q103" class="q full_width">
    <a class="item_anchor" name="ItemAnchor36"></a>
    <div class="full_width_space"><div><strong>f)</strong></div></div>
</div>

<div class="clear"></div>

<div id="q104" class="q">
    <a class="item_anchor" name="ItemAnchor37"></a>
    <label class="question top_question" for="RESULT_TextField-37">Name of the school if serving in a school</label>
    <input type="text" name="RESULT_TextField-37" class="text_field" id="RESULT_TextField-37"  size="25" maxlength="255" value="" />
</div>
<div id="q105" class="q">
    <a class="item_anchor" name="ItemAnchor38"></a>
    <label class="question top_question" for="RESULT_TextField-38">Period of service</label>
    <input type="text" name="RESULT_TextField-38" class="text_field" id="RESULT_TextField-38"  size="25" maxlength="25" value="" />
</div>

<div class="clear"></div>
</div>
<input type="hidden" name="EParam" value="FzpUCZwnDno=" />
<div class="outside_container">
    <div class="buttons_reverse"><input type="submit" name="Submit" value="Submit" class="submit_button" id="FSsubmit" /></div>
</div>

<!-- END_ITEMS -->
</form>
</body>
</html>