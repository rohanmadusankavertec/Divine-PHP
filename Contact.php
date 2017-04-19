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

            function Send() {
                var first=document.getElementById("first").value;
                var last=document.getElementById("last").value;
                var email=document.getElementById("email").value;
                var contact=document.getElementById("contact").value;
                var subject=document.getElementById("subject").value;
                var message=document.getElementById("message").value;
                
                var xmlHttp = getAjaxObject();
                xmlHttp.onreadystatechange = function ()
                {
                    if (xmlHttp.readyState === 4 && xmlHttp.status === 200)
                    {
                        var reply = xmlHttp.responseText;

                        if (reply === "Success") {
                            alert("Success");
                        } else {
                            alert("Error");
                        }
                    }
                };

                xmlHttp.open("POST", "src/Contact?action=save&first=" + first+"&last="+ last+"&email="+ email+"&contact="+ contact+"&subject="+ subject+"&message="+ message, true);
                xmlHttp.send();
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
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
        <div class="row InnerPageContentInnerContentWrap">
            <div class="col-xs-12" style="padding: 15px 50px 15px 50px;">
                <div class="row">
                    <div class="col-xs-12 col-md-7" style="border-right: solid 1px #ededed">
                        <div id="MainContent_UpdatePanelForm">

                            <h4>Send a Message</h4>
                            <br />
                            <br />
                            <div data-val-validationGroup="valGroupContactUs" id="MainContent_valSummary" class="text-danger alert alert-danger ValidationSummaryBlock" data-valsummary="true" style="display:none;">

                            </div>
                            <div class="form-horizontal" style="font-size: 16px;letter-spacing: 1px; ">
                                <div class="form-group FormFieldSpacing">
                                    <label id="MainContent_lblFirstName" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="first" class="form-control" />
                                        <span>First Name is required</span>
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="last" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label d="MainContent_lblEmailAddress" class="col-md-3 control-label">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" id="email" class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label class="col-md-3 control-label">Contact Number</label>
                                    <div class="col-md-9">
                                        <input type="text" id="contact" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label for="MainContent_ddlSubject" id="MainContent_lblSubject" class="col-md-3 control-label">Subject</label>
                                    <div class="col-md-9">
                                        <select name="ctl00$MainContent$ddlSubject" id="subject" class="form-control">
                                            <option selected="selected" value="0">Please select a subject..</option>
                                            <option value="Comments -or- Suggestions">Comments -or- Suggestions</option>
                                            <option value="Birthday Cake">Birthday Cake</option>
                                            <option value="Custom Design Cake">Custom Design Cake</option>
                                            <option value="Event Catering">Event Catering</option>
                                            <option value="Other">Other</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group FormFieldSpacing">
                                    <label for="MainContent_txtMessage" id="MainContent_lblMessage" class="col-md-3 control-label">Message</label>
                                    <div class="col-md-9">
                                        <textarea name="message" rows="5" cols="20" id="MainContent_txtMessage" class="form-control input-sm" placeholder="(Plain text only)">
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group FormFieldSpacing" style="margin-top: 20px;">
                                    <input class="form-group btn-danger" type="button" onclick="Send()" value="Send Message" style="float: right;border-radius: 3px; margin-right: 20px;"/>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5"  style="font-size: 16px;letter-spacing: 1px; ">
                        <div class="visible-xs">
                            <br />
                            <hr />
                            <br />
                        </div>
                        <address>
                            <strong>Divine Cake (Pvt) Ltd.</strong><br />
                            Queen's Rd, Colombo<br />
                            Sri Lanka<br />
                            Phone: (+94) 11 2 583598<br />
                        </address>
                        <strong>Restaurant Open Hours:</strong><br />
                        7:00am to 7:00pm (Monday - Saturday)<br />
                        <br />
                        <div>
                            Like us on Facebook
                            <br />
                            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FDivineCakesSL&amp;width&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border: none; overflow: hidden; height: 62px;" allowtransparency="true"></iframe>
                        </div>
                        <br />
                        <div>
                            Location on Google Maps
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.857466176807!2d79.85153226901564!3d6.899127031944129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25961f6e1545b%3A0x63cd1e0006464620!2sDivine+Cake!5e0!3m2!1sen!2slk!4v1489490304883" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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
