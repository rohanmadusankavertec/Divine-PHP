<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <title></title>
    </head>
    <body>

        <?php
        include './Header.php';
        ?>




    <center>
        <div id="MainContent_bgTopLarge" class="hidden-xs" style="height: 500px; width:93%; overflow: hidden;  z-index: -5; background: #fff url('img/PageImage9.png') no-repeat top center;"></div>
    </center>
    <div class="visible-xs" style="height:320px;padding:0;z-index:-5;margin-top:-125px;background:#fff;" ></div>
    <div class="container InnerPageContentBlock" style="font-size: 16px;letter-spacing: 1px; width: 91%">
        <div class="row">
            <div class="col-xs-6 col-sm-4">
                <div class="InnerPageContentTitleWrap" style="width: 250px;">
                    <h1>Login / Register</h1>
                </div>
            </div>
        </div>
        <div class="row InnerPageContentInnerContentWrap">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                <div class="row">
                    <div class="col-xs-12 col-md-6" style="border-right: solid 1px #ededed">
                        <div id="MainContent_UpdatePanelForm">

                            <h4>Login</h4>
                            <br />
                            <br />
                            <div data-val-validationGroup="valGroupContactUs" id="MainContent_valSummary" class="text-danger alert alert-danger ValidationSummaryBlock" data-valsummary="true" style="display:none;">

                            </div>
                            <div class="form-horizontal" style="font-size: 16px;letter-spacing: 1px; ">
                                <div class="form-group FormFieldSpacing">
                                    <label id="MainContent_lblFirstName" class="col-md-3 control-label">Username</label>
                                    <div class="col-md-9">
                                        <input name="" type="text" maxlength="100" id="MainContent_txtFirstName" class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label id="MainContent_lblLastName" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input name="" type="password" maxlength="100" id="MainContent_txtLastName" class="form-control input-sm" />
                                    </div>
                                </div>

                                <div class="form-group FormFieldSpacing" style="margin-top: 20px;">
                                    <div class="col-md-offset-8 col-md-9">
                                        <a id="MainContent_lnkbtnSubmitMessage" class="btn btn-default btn-danger" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$MainContent$lnkbtnSubmitMessage&quot;, &quot;&quot;, true, &quot;valGroupContactUs&quot;, &quot;&quot;, false, true))">Send Message</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                        <div class="col-xs-12 col-md-6"  style="font-size: 16px;letter-spacing: 1px; ">

                            <div id="MainContent_UpdatePanelForm">

                                <h4>Register</h4>
                                <br />
                                <br />
                                <div data-val-validationGroup="valGroupContactUs" id="MainContent_valSummary" class="text-danger alert alert-danger ValidationSummaryBlock" data-valsummary="true" style="display:none;">

                                </div>
                                <div class="form-horizontal" style="font-size: 16px;letter-spacing: 1px; ">
                                    <div class="form-group FormFieldSpacing">
                                        <label id="MainContent_lblFirstName" class="col-md-3 control-label">First Name</label>
                                        <div class="col-md-9">
                                            <input name="" type="text" maxlength="100" id="MainContent_txtFirstName" class="form-control input-sm" />
                                        </div>
                                    </div>
                                    <div class="form-group FormFieldSpacing">
                                        <label id="MainContent_lblFirstName" class="col-md-3 control-label">Last Name</label>
                                        <div class="col-md-9">
                                            <input name="" type="text" maxlength="100" id="MainContent_txtFirstName" class="form-control input-sm" />
                                        </div>
                                    </div>
                                    <div class="form-group FormFieldSpacing">
                                        <label id="MainContent_lblFirstName" class="col-md-3 control-label">Contact No</label>
                                        <div class="col-md-9">
                                            <input name="" type="text" maxlength="100" id="MainContent_txtFirstName" class="form-control input-sm" />
                                        </div>
                                    </div>
                                    <div class="form-group FormFieldSpacing">
                                        <label id="MainContent_lblFirstName" class="col-md-3 control-label">Username</label>
                                        <div class="col-md-9">
                                            <input name="" type="text" maxlength="100" id="MainContent_txtFirstName" class="form-control input-sm" />
                                        </div>
                                    </div>
                                    <div class="form-group FormFieldSpacing">
                                        <label id="MainContent_lblLastName" class="col-md-3 control-label">Password</label>
                                        <div class="col-md-9">
                                            <input name="" type="password" maxlength="100" id="MainContent_txtLastName" class="form-control input-sm" />
                                        </div>
                                    </div>
                                    <div class="form-group FormFieldSpacing">
                                        <label id="MainContent_lblLastName" class="col-md-3 control-label">Repeat Password</label>
                                        <div class="col-md-9">
                                            <input name="" type="password" maxlength="100" id="MainContent_txtLastName" class="form-control input-sm" />
                                        </div>
                                    </div>

                                    <div class="form-group FormFieldSpacing" style="margin-top: 20px;">
                                        <div class="col-md-offset-8 col-md-9">
                                            <a id="MainContent_lnkbtnSubmitMessage" class="btn btn-default btn-danger" href="">Register</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                </div>
            </div>
        </div>
    </div>

        <?php
        include './Footer.php';
        ?>
    </body>
</html>
