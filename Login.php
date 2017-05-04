<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <link rel="shortcut icon" href="img/divine.ico"/>

        <title>DIVINE | FOODS</title>

        <script type="text/javascript">
            function getAjaxObject() {
                var xmlHttp;
                if (window.XMLHttpRequest) {
                    xmlHttp = new XMLHttpRequest();
                } else
                {
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                return xmlHttp;
            }

            function Register() {

                document.getElementById("Registeroutputmsg").className = "hidden";

                var first = document.getElementById("first").value;
                var last = document.getElementById("last").value;
                var contact = document.getElementById("contact").value;
                var email = document.getElementById("email").value;
                var address = document.getElementById("address").value;
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                var rpassword = document.getElementById("rpassword").value;
                if (first === "") {
                    document.getElementById("Registeroutputmsg").className = "alert alert-warning";
                    document.getElementById("Registeroutputmsg").innerHTML = "Please Enter the First Name ...";
                } else if (last === "") {
                    document.getElementById("Registeroutputmsg").className = "alert alert-warning";
                    document.getElementById("Registeroutputmsg").innerHTML = "Please Enter the Last Name ...";
                } else if (contact === "") {
                    document.getElementById("Registeroutputmsg").className = "alert alert-warning";
                    document.getElementById("Registeroutputmsg").innerHTML = "Please Enter the Contact Number ...";
                } else if (email === "") {
                    document.getElementById("Registeroutputmsg").className = "alert alert-warning";
                    document.getElementById("Registeroutputmsg").innerHTML = "Please Enter the Email ...";
                } else if (address === "") {
                    document.getElementById("Registeroutputmsg").className = "alert alert-warning";
                    document.getElementById("Registeroutputmsg").innerHTML = "Please Enter the Address ...";
                } else if (username === "") {
                    document.getElementById("Registeroutputmsg").className = "alert alert-warning";
                    document.getElementById("Registeroutputmsg").innerHTML = "Please Enter the username ...";
                } else if (password === "") {
                    document.getElementById("Registeroutputmsg").className = "alert alert-warning";
                    document.getElementById("Registeroutputmsg").innerHTML = "Please Enter the Password ...";
                } else if (rpassword === "") {
                    document.getElementById("Registeroutputmsg").className = "alert alert-warning";
                    document.getElementById("Registeroutputmsg").innerHTML = "Please Enter the Repeat Password ...";
                } else if (password !== rpassword) {
                    document.getElementById("Registeroutputmsg").className = "alert alert-warning";
                    document.getElementById("Registeroutputmsg").innerHTML = "Passwords did not matched ...";
                } else {
                    var xmlHttp = getAjaxObject();
                    xmlHttp.onreadystatechange = function ()
                    {
                        if (xmlHttp.readyState === 4 && xmlHttp.status === 200)
                        {
                            var reply = xmlHttp.responseText;
                            if (reply === "Success") {
                                document.getElementById("Registeroutputmsg").innerHTML = "<strong>Success !</strong> Registration Successfully. Please Log in.";
                                document.getElementById("Registeroutputmsg").className = "alert alert-success";
                                setTimeout("window.location = 'Login.php';", "3000");
                            } else {
                                document.getElementById("Registeroutputmsg").innerHTML = "<strong>Error !</strong> Something went wronge...";
                                document.getElementById("Registeroutputmsg").className = "alert alert-danger";
                            }
                        }
                    };
                    xmlHttp.open("POST", "src/Login.php?action=save&first=" + first + "&last=" + last + "&contact=" + contact + "&email=" + email + "&address=" + address + "&username=" + username + "&password=" + password, true);
                    xmlHttp.send();
                }
            }




            function Login() {

                document.getElementById("loginoutputmsg").className = "hidden";

                var username = document.getElementById("lusername").value;
                var password = document.getElementById("lpassword").value;
                if (username === "") {
                    document.getElementById("loginoutputmsg").className = "alert alert-warning";
                    document.getElementById("loginoutputmsg").innerHTML = "Please Enter the Username ...";
                } else if (password === "") {
                    document.getElementById("loginoutputmsg").className = "alert alert-warning";
                    document.getElementById("loginoutputmsg").innerHTML = "Please Enter the Password ...";
                } else {
                    var xmlHttp = getAjaxObject();
                    xmlHttp.onreadystatechange = function ()
                    {
                        if (xmlHttp.readyState === 4 && xmlHttp.status === 200)
                        {
                            document.getElementById("loginoutputmsg").className = "hidden";
                            var reply = xmlHttp.responseText;
                            console.log(reply);
                            if (reply === "1") {
                                window.location = 'index.php';
                            }if (reply === "2") {
                                window.location = 'admin_dashboard.php';
                            } else {
                                document.getElementById("loginoutputmsg").innerHTML = "<strong>Sorry !</strong> Username Or Password is wrong...";
                                document.getElementById("loginoutputmsg").className = "alert alert-danger";
                            }
                        }
                    };
                    xmlHttp.open("POST", "src/Login.php?action=login&username=" + username + "&password=" + password, true);
                    xmlHttp.send();
                }
            }
        </script>
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
                    <div class="col-xs-12 col-md-4" style="border-right: solid 1px #ededed">
                        <div id="MainContent_UpdatePanelForm">

                            <h4>Login</h4>
                            <br />
                            <br />
                            <div class="hidden" id="loginoutputmsg">

                            </div>
                            <div class="form-horizontal" style="font-size: 16px;letter-spacing: 1px; ">
                                <div class="form-group FormFieldSpacing">
                                    <label id="MainContent_lblFirstName" class="col-md-3 control-label">Username</label>
                                    <div class="col-md-9">
                                        <input style="font-size: 16px;" type="text" maxlength="100" id="lusername" class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label id="MainContent_lblLastName" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input style="font-size: 16px;" type="password" maxlength="100" id="lpassword" class="form-control input-sm" />
                                    </div>
                                </div>

                                <div class="form-group FormFieldSpacing" style="margin-top: 20px;">
                                    <div class="col-md-offset-8 col-md-9">
                                        <a id="MainContent_lnkbtnSubmitMessage" class="btn btn-default btn-danger" onclick="Login();">Login</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="col-xs-12 col-md-8"  style="font-size: 16px;letter-spacing: 1px; ">

                        <div id="MainContent_UpdatePanelForm">

                            <h4>Register</h4>
                            <br />
                            <br />
                            <div data-val-validationGroup="valGroupContactUs" id="MainContent_valSummary" class="text-danger alert alert-danger ValidationSummaryBlock" data-valsummary="true" style="display:none;">

                            </div>
                            <div class="hidden" id="Registeroutputmsg">

                            </div>
                            <div class="form-horizontal" style="font-size: 16px;letter-spacing: 1px; ">
                                <div class="form-group FormFieldSpacing">
                                    <label id="MainContent_lblFirstName" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input style="font-size: 16px;" type="text" maxlength="100" id="first" class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label id="MainContent_lblFirstName" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input style="font-size: 16px;" type="text" maxlength="100" id="last" class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label id="MainContent_lblFirstName" class="col-md-3 control-label">Contact No</label>
                                    <div class="col-md-9">
                                        <input style="font-size: 16px;" type="text" maxlength="100" id="contact" class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label id="MainContent_lblFirstName" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input style="font-size: 16px;" type="text" maxlength="100" id="email" class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label id="MainContent_lblFirstName" class="col-md-3 control-label">Address</label>
                                    <div class="col-md-9">
                                        <textarea style="font-size: 16px;" class="form-control input-sm" id="address"></textarea>
                                        <!--<input name="" type="text" id="MainContent_txtFirstName" class="form-control input-sm" />-->
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label id="MainContent_lblFirstName" class="col-md-3 control-label">Username</label>
                                    <div class="col-md-9">
                                        <input style="font-size: 16px;" type="text" maxlength="100" id="username" class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label id="MainContent_lblLastName" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input style="font-size: 16px;" type="password" maxlength="100" id="password" class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label id="MainContent_lblLastName" class="col-md-3 control-label">Repeat Password</label>
                                    <div class="col-md-9">
                                        <input style="font-size: 16px;" type="password" maxlength="100" id="rpassword" class="form-control input-sm" />
                                    </div>
                                </div>

                                <div class="form-group FormFieldSpacing" style="margin-top: 20px;">
                                    <div class=" col-md-10">
                                        <a id="MainContent_lnkbtnSubmitMessage" class="btn btn-default btn-danger" onclick="Register();" style="float: right;">Register</a>
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
