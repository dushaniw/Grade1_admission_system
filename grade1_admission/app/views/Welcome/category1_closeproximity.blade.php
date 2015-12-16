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

        <div id="q2" class="q full_width">
            <a class="item_anchor" name="ItemAnchor1"></a>
            <div class="segment_header" style="width:auto;text-align:Left;"><h1 style="font-weight:bold;font-size:18px;padding:20px 1em ;">Children of residents in close proximity of school</h1></div>
        </div>

        <div class="clear"></div>

        <div id="q80" class="q full_width">
            <a class="item_anchor" name="ItemAnchor2"></a>
            <div class="full_width_space"><div><strong>a)</strong></div></div>
        </div>

        <div class="clear"></div>

        <div id="q3" class="q">
            <a class="item_anchor" name="ItemAnchor3"></a>
            <label class="question top_question" for="RESULT_TextField-3">Number of years that include the applicant and spouse/Legal guardian in the electoral register</label>
            <input type="text" name="RESULT_TextField-3" class="text_field" id="RESULT_TextField-3"  size="25" maxlength="255" value="" />
        </div>
        <div id="q4" class="q">
            <a class="item_anchor" name="ItemAnchor4"></a>
            <label class="question top_question" for="RESULT_TextField-4">Number of years that include either name of the applicant or the name of the spouse in the electoral register</label>
            <input type="text" name="RESULT_TextField-4" class="text_field" id="RESULT_TextField-4"  size="25" maxlength="255" value="" />
        </div>

        <div class="clear"></div>

        <div id="q79" class="q full_width">
            <a class="item_anchor" name="ItemAnchor5"></a>
            <div class="full_width_space"><div><span style="font-size: 11px;"><em>This is applicable for a period of recent 05 years, prior to the year the application is submitted<br /></em></span></div></div>
        </div>

        <div class="clear"></div>

        <div id="q81" class="q full_width">
            <a class="item_anchor" name="ItemAnchor6"></a>
            <div class="full_width_space"><div><strong>b) Ownership of place of residence<br /></strong></div></div>
        </div>

        <div class="clear"></div>

        <div id="q82" class="q required">
            <a class="item_anchor" name="ItemAnchor7"></a>
            <label class="question top_question" for="RESULT_FileUpload-7">Title deed - in the name of applicant/spouse or applicant's parents / Registered Lease Bond/ Government official Quarters Documents / un-registered Lease Bond/Any other legal documents to prove ownership&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
            <div class=""><input type="file" name="RESULT_FileUpload-7" size="25" class="file_upload" id="RESULT_FileUpload-7" /><br/><span class="file_upload_info"></span>&nbsp;<input type="submit" name="Upload-7" value="Upload" class="file_upload_button" /> <input type="submit" name="Delete-7" value="Delete" class="file_upload_button" /></div>
        </div>

        <div class="clear"></div>

        <div id="q83" class="q required">
            <a class="item_anchor" name="ItemAnchor8"></a>
            <label class="question top_question" for="RESULT_FileUpload-8">Additional documents which could be submitted in proof of residence (national ID/Water bills/Light bills/Phone bills/Marriage certificate)&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
            <div class=""><input type="file" name="RESULT_FileUpload-8" size="25" class="file_upload" id="RESULT_FileUpload-8" /><br/><span class="file_upload_info"></span>&nbsp;<input type="submit" name="Upload-8" value="Upload" class="file_upload_button" /> <input type="submit" name="Delete-8" value="Delete" class="file_upload_button" /></div>
        </div>
        <div id="q7" class="q required">
            <a class="item_anchor" name="ItemAnchor9"></a>
            <label class="question top_question" for="RESULT_TextField-9">No of schools located closer to the place of residence where the child could be admitted than the school applied for&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
            <input type="text" name="RESULT_TextField-9" class="text_field" id="RESULT_TextField-9"  size="25" maxlength="25" value="" />
        </div>
    </div>
    <div class="clear"></div>
        <input type="hidden" name="EParam" value="FzpUCZwnDno=" />
        <div class="outside_container">
            <div class="buttons_reverse"><input type="submit" name="Submit" value="Submit" class="submit_button" id="FSsubmit" /></div>
        </div>

    <!-- END_ITEMS -->
</form>
</body>
</html>