<html>
    <head>
        <title>Eastern Iowa Miles for Myeloma</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
            * { box-sizing: border-box }
            body {
                color: #000080;
                font-family: Arial, sans-serif;
                line-height: 1.4;
            }
            h1,h2,h3,h4,h5,h6 {
                font-family: Arial, sans-serif;
            }
            #header img {
                width: 100%;
            }
            .accent, .accent a {
                color: #ff6600;
            }
            .small-text {
                font-size: 10px;
                font-weight: normal;
                text-align: left;
                padding-left: 10px;
            }
            .small-text strong {
                font-weight: bold;
            }
            .button {
                border-top: 1px solid #96d1f8;
                background: #4185d9;
                background: -webkit-gradient(linear, left top, left bottom, from(#000080), to(#4185d9));
                background: -webkit-linear-gradient(top, #000080, #4185d9);
                background: -moz-linear-gradient(top, #000080, #4185d9);
                background: -ms-linear-gradient(top, #000080, #4185d9);
                background: -o-linear-gradient(top, #000080, #4185d9);
                padding: 11px 22px;
                -webkit-border-radius: 11px;
                -moz-border-radius: 11px;
                border-radius: 11px;
                -webkit-box-shadow: rgba(255,102,0,1) 0 1px 0;
                -moz-box-shadow: rgba(255,102,0,1) 0 1px 0;
                box-shadow: rgba(255,102,0,1) 0 1px 0;
                text-shadow: rgba(255,102,0,.4) 0 1px 0;
                color: white;
                font-size: 20px;
                font-family: 'Lucida Grande', Helvetica, Arial, Sans-Serif;
                text-decoration: none;
                vertical-align: middle;
            }
            .button:hover {
                border-top-color: #ff6600;
                background: #ff6600;
                color: #000080;
            }
            .button:active {
                border-top-color: #f05811;
                background: #f05811;
            }

            #container { max-width: 780px; margin: 0 auto;  }
            #content { position: relative; }
        

            /* Full screen */
            @media only screen and (min-width : 790px) {
                #left { margin-right: 350px; }
                #right { width: 300px; height: 450px; position: absolute; top:0; right:0; }
                .bubble {
                    background: #f0ede5;
                    text-align: center; 
                    font-weight: bold; 
                    border: 0px solid #ff6600; 
                    border-radius: 12px;
                    padding-top:25px; 
                    padding-bottom:25px;
                }
                .location-map {
                    width: 90%;
                    margin: 20px 0;
                }
                .location-map iframe {
                    width: 400px;
                    height: 300px;
                }
                #header hr {
                    visibility: hidden;
                }
            }

            /* Mobile */
            @media only screen and (max-width : 790px) {
                html,body {
                    margin:0;
                    padding:0;
                    line-height: 1.7;
                }
                #left { width:92%; margin: 0 auto; }
                #right { width: 100%; position: inherit; top:inherit; left:inherit; clear:both; }
                .bubble {
                    background: #f0ede5;
                    text-align: center;
                    border-radius: 0px; 
                    font-weight: bold; 
                    border: 0px solid #ff6600; 
                }
                .location-map {
                    width: 100%;
                    margin: 20px auto;
                }
                .location-map iframe {
                    width: 100%;
                    height: 300px;
                }
                #action-buttons {
                    background-color: transparent; 
                }
                #action-buttons a.button {
                    display:block;
                    margin: 20px auto;
                    max-width: 90%;

                }
                .action-button-separator {
                    display: none;
                }
                #header {
                    overflow: hidden;
                    padding-bottom: 30px;
                    margin:0 auto;
                    width: 98%;
                }

                #header hr {
                    height:2px;
                    margin-top: 4px;
                }

                .add-mobile-space {
                    width:92%;
                    margin-left:auto;
                    margin-right:auto;
                }

                ul li, ol li {
                    padding-bottom: 20px;
                }

            }
            
            .bubble.with-margin-bottom {
                margin-bottom: 30px;
            }
            .mini-section {
                padding: 0 30px 0 30px; 
                text-align: left; 
                font-size: 13px; 
                font-weight: normal;
            }
            .mini-section.with-top-padding {
                padding-top:30px;
            }

            hr {
                border: 0;
                height: 1px;
                background-image: -webkit-linear-gradient(left, rgba(255,102,0,0), rgba(255,102,0,0.75), rgba(255,102,0,0)); 
                background-image:    -moz-linear-gradient(left, rgba(255,102,0,0), rgba(255,102,0,0.75), rgba(255,102,0,0)); 
                background-image:     -ms-linear-gradient(left, rgba(255,102,0,0), rgba(255,102,0,0.75), rgba(255,102,0,0)); 
                background-image:      -o-linear-gradient(left, rgba(255,102,0,0), rgba(255,102,0,0.75), rgba(255,102,0,0)); 
            }
            #new-this-year{
                padding-top:4px;
                padding-bottom: 7px;
                padding-left: 25px;
            }
            #faq h5 {
                font-size: 0.9em;
            }
            #footer {
                margin-top: 35px;
                margin-bottom: 45px;
            }
            .question-content {
                padding-left: 15px;
                padding-right: 15px;
            }

            .location-map iframe {
                pointer-events: none;
            }
            

        </style>
        <style type="text/css">
        /* AddThisEvent (add to your existing CSS) */
        .addthisevent-drop                      {display:inline-block;position:relative;z-index:999998;font-family:'Roboto',sans-serif;color:#fff!important;text-decoration:none;font-size:15px;text-decoration:none;}
        .addthisevent-drop:hover                {color:#fff;font-size:15px;text-decoration:none;}
        .addthisevent_dropdown                  {position:relative;text-align:left;display:block!important;}
        .addthisevent_dropdown span             {display:inline-block;position:relative;line-height:130%;background:#ebebeb url(button-bg.png) repeat-x;text-decoration:none;font-size:14px;font-weight:300;color:#333;cursor:pointer;padding:7px 14px 8px 12px;border:1px solid #e1e1e1;margin:0px 6px 0px 0px;-moz-border-radius:4px;-webkit-border-radius:4px;margin-bottom: 14px;}
        .addthisevent_dropdown span:hover       {background:#f4f4f4;color:#000;text-decoration:none;font-size:14px;}
        .addthisevent_dropdown span:active      {top:1px;}
        .addthisevent_dropdown .ateoutlook      {border-top:3px solid #fa9d00;}
        .addthisevent_dropdown .ategoogle       {border-top:3px solid #d53900;}
        .addthisevent_dropdown .atehotmail      {border-top:3px solid #1473c5;}
        .addthisevent_dropdown .ateyahoo        {border-top:3px solid #65106e;}
        .addthisevent_dropdown .ateical         {border-top:3px solid #ab373a;}
        .addthisevent span                      {display:none!important;}
        .addthisevent-drop ._url,.addthisevent-drop ._start,.addthisevent-drop ._end,.addthisevent-drop ._summary,.addthisevent-drop ._description,.addthisevent-drop ._location,.addthisevent-drop ._organizer,.addthisevent-drop ._organizer_email,.addthisevent-drop ._facebook_event,.addthisevent-drop ._all_day_event {display:none!important;}
        .addthisevent_dropdown .copyx           {display:none;}
        .addthisevent_dropdown .brx             {display:none;}
        .addthisevent_dropdown .frs             {position:absolute;top:8px;cursor:pointer;right:13px;padding-left:10px;font-style:normal;font-weight:normal;text-align:right;z-index:101;line-height:110%;background:#fff;text-decoration:none;font-size:10px;color:#cacaca;}
        .addthisevent_dropdown .frs:hover       {color:#6d84b4;}
        .addthisevent                           {visibility:hidden;}
        </style>
    </head>
    <body>
        <div id="container">
            <div id="header"><img src="/img/mileslogo.jpg?cachebust=20150312-01"><hr></div>
            <div id="content">
                <div id="right">
                    <div id="action-buttons" class="bubble with-margin-bottom">
                        <a href="https://www.raceentry.com/races/eastern-iowa-miles-for-myeloma/2015/register" class="button">Register to run/walk!</a>
                        <!-- <div class="small-text"><br><strong>PLEASE NOTE-</strong> T-SHIRTS WILL NOT BE AVAILABLE FOR REGISTRATIONS MADE AFTER MIDNIGHT SEPTEMBER 25.<br><br>
                        * CONTINUE TO REGISTER EITHER AS <strong>INDIVIDUALS (No T-Shirt)</strong> or <strong>TEAM (No T-Shirt)</strong>.<br></div> -->
                        <span class="action-button-separator"><br><br> - OR -<br><br></span>
                        <a href="http://support.themmrf.org/goto/MilesforMM2015" class="button">Donate to the cause.</a>
                        <div id="more-info" class="mini-section with-top-padding">
                            <!-- <hr>
                            <div id="new-this-year">
                                <h3>New this year</h3>
                                <p>
                                    <ul>
                                        <li>awards</li>
                                        <li>team sponsorship</li>
                                    </ul>
                                    More information on these fun new options is coming soon!</span>
                                </p>
                            </div>
                        -->
                            <hr>
                        </div>
                        <div id="faq-teaser" class="mini-section">
                            <div id="new-this-year">
                                <h3>Team Registration</h3>
                                <p>
                                    <ul>
                                        <li><a href="#faq-create-team">Create A Team</a></li>
                                        <li><a href="#faq-join-team">Join A Team</a></li>
                                    </ul>
                                </p>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div id="left">
                <h3>About us</h3>
                <p>Eastern Iowa Miles for Myeloma is excited to announce the <span class="accent">4th Annual Miles for Myeloma Run/Walk</span> on <span class="accent">Sunday, September 27, 2015</span> at <span class="accent">Terry Trueblood Recreation Area</span> in Iowa City, Iowa.</p>
                <h3>Schedule</h3>
                <ul>
                    <li>10 am - Same Day Registration and T-shirt pickup, coffee and snacks</li>
                    <li>11 am - Run/Walk (2 or 4 mile)</li>
                </ul>
                <h3>Location</h3>
                <p class="location-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47706.83878154421!2d-91.54388431387528!3d41.641103491203765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87e4402e2e9fb6df%3A0xe3c8206f23db1cb7!2sTerry+Trueblood+Recreation+Area!5e0!3m2!1sen!2sus!4v1401848578452" frameborder="0" style="border:0"></iframe></p>
                <h3>Add to your calendar</h3>
                <p class="add-to-calendar">
                    <!-- Snippet -->
                    <div class="addthisevent">
                        <span class="_start">09/27/2015 10:00:00 AM</span>
                        <span class="_end">09/27/2015 01:00:00 PM</span>
                        <span class="_zonecode">11</span>
                        <span class="_summary">A 2 or 4 mile run/walk benefiting Multiple Myeloma research.</span>
                        <span class="_description">Miles for Myeloma is an annual 2 or 4 miles run/walk that raises funds and promotes awareness for Multiple Myeloma. It is organized by Eastern Iowa Miles for Myeloma.</span>
                        <span class="_location">Terry Trueblood Recreation Area 4213 Sand Rd SE Iowa City, IA 52240 United States</span>
                        <span class="_organizer">Eastern Iowa Miles for Myeloma</span>
                        <span class="_organizer_email">info@milesformm.com</span>
                        <span class="_all_day_event">false</span>
                        <span class="_date_format">MM/DD/YYYY</span>
                    </div>
                </p>
            </div>
            <div id="help-collect" class="add-mobile-space">
                <h3>Help us collect donations</h3>
                <p>We have forms to help you gather donations on behalf of Miles for Myeloma. Check out our <a href="#forms" class="accent">forms</a> section for more information.</p>
            </div>                
            <hr>
            <div id="car-donation" class="add-mobile-space">
                <a name="car-donation"></a>
                <h3>Car Donation to Eastern Iowa Miles for Myeloma</h3>
                <p>Donate your car, boat, truck, RV, Jet Ski or snowmobile to Eastern Iowa Miles for Myeloma and receive a tax deduction. This no cost, no hassle process begins when you contact our fundraising partner, Donation Line LLC at 877-227-7487. Make sure to ask for our extension 3101. Or you can click here <a href="http://www.donationline.com/newvehicle_donation_form.shtml?n=Iowa%20City%20Miles%20for%20Myeloma" class="accent">“Donate Car”</a> to donate online now.</p>
            </div>
            <hr>
            <div id="employer-matching" class="add-mobile-space">
                <a name="employer-matching"></a>
                <h3>Matching Gifts</h3>
                <p>Many companies offer a Matching Gifts program, whereby employers match contributions made by employees. This is a BENEFIT for the employees. Be sure to use it! </p>                
                <p>Here is all you have to do:<p>
                <ol>
                    <li>The employee fills out the Matching Gift form from their employer — it will either be an online form or can be obtained through the employee's HR department</li>
                    <li>After completing the form, either forward the confirmation to <a href="mailto:events@themmrf.org">events@themmrf.org</a> or if it is a form that needs to be processed by the MMRF, fax it to (203) 229-0572.  MMRF will handle from there.</li>
                    <li>To have the match credited to Eastern Iowa Miles For Myeloma please send an email to <a href="mailto:info@milesformm.com">info@milesformm.com</a>
                </ol>
            </div>
            <hr>
            <div id="faq" class="add-mobile-space">
                <h3>Frequently Asked Questions (FAQ)</h3>
                <div id="questions">
                    <div class="question">
                        <a name="faq-create-team"></a>
                        <h4>Create A Team</h4>
                        <div class="question-content">
                            <h5>First, Establish your team to become a team captain, then decide on t-shirts</h5>
                            <ul>
                                <li>You need a team name and an 8 character team password.</li>
                                <li>You need to decide if you will use the Miles for Myeloma event t-shirts, if you will create your own team t-shirt or if you will let individuals wear what they would like.</li>
                            </ul>
                            <h5>Second, Create your team on the run/walk registration website.</h5>
                            <ol>
                                <li>Go to the Eastern Iowa Miles for Myeloma <a href="https://www.raceentry.com/races/eastern-iowa-miles-for-myeloma/2015/register" class="accent">Registration Page</a></li>
                                <li>Go to <strong>Entry Type</strong> - Select "Team".</li>
                                <li>Go to <strong>Team Entry</strong> - Select "Create Team" and select the type of team (with or without t-shirt).</li>
                                <li>Go to <strong>Team Name</strong> - Enter the name of your team.</li>
                                <li>Go to <strong>Team Password</strong> - Enter your 8 character password.</li>
                                <li>Go to <strong>Verify Password</strong> - Enter your 8 character password.</li>
                                <li>Complete the Team Captain registration information(name, address, email address, etc.).</li>
                                <li>After completing all required fields - hit "Continue"</li>
                                <li>Complete the Payment Page and hit "Register".</li>
                                <li>A confirmation email will be sent to the Team Captain's email address.</li>
                            </ol>
                            <h5>Third, Instruct team members to join your team.</h5>
                            <ul>
                                <li>Send the team name and password to people who you'd like to join your team.</li>
                                <li>Send the <a href="#faq-join-team" class="accent">'join a team'</a> instructions to people who you'd like to join your team.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="question">
                        <a name="faq-join-team"></a>
                        <h4>Join A Team</h4>
                        <div class="question-content">
                            <h5>First, get your registration information for your team captain</h5>
                            <ul>
                                <li>Get your team name from your team captain.</li>
                                <li>Get your team password from your team captain.</li>
                            </ul>
                            <h5>Second, register for the run/walk using the information from your team captain</h5>
                            <ol>
                                <li>Go to the Eastern Iowa Miles for Myeloma <a href="https://www.raceentry.com/races/eastern-iowa-miles-for-myeloma/2015/register" class="accent">Registration Page</a></li>
                                <li>Go to <strong>Entry Type</strong> - Select "Team"</li>
                                <li>Go to <strong>Team Entry</strong> - Select the type of team (with or without t-shirt) you will have.</li>
                                <li>Go to <strong>Team Name</strong> - Select your team from the drop down box.</li>
                                <li>Go to <strong>Team Password</strong> - Enter the team password.</li>
                                <li>Complete the individual team member registration information (name, address, email address, etc.).</li>
                                <li>After completing all required fields - hit "Continue"</li>
                                <li>Complete the Payment Page and hit "Register".</li>
                                <li>A confirmation email will be sent to the team member's email address.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div id="forms" class="add-mobile-space">
                <a name="forms"></a>
                <h3>Forms and Other Information</h3>
                <ul>
                    <li>
                        <a href="/milesformyeloma.2015.pledge.form.pdf">Pledge Form</a>
                    </li>
                <!--
                    <li>
                        <a href="/donationthankyouletter.pdf">Donation Thank You Letter</a>
                    </li>
                    <li>
                        <a href="/milesformyeloma.2015.single.sided.flyer.pdf">Run/Walk Flyer</a>
                    </li>
                -->
                    <li>
                        <a href="/milesformyeloma.2015.single.sided.flyer.pdf">Sponsor Flyer</a>
                    </li>
                    <li>
                        <a href="/milesformyeloma.2015.trifold.brochure.pdf">Trifold Informational Brochure</a>
                    </li>
                </ul>
            </div>
            <div id="footer">
                    <hr>
            </div>
        </div>
        <!-- AddThisEvent -->
        <script type="text/javascript" src="https://addthisevent.com/libs/1.5.8/ate.min.js"></script>
        <!-- AddThisEvent Settings -->
        <script type="text/javascript">
        addthisevent.settings({
            mouse       : false,
            css         : false,
            outlook     : {show:true, text:"Outlook"},
            google      : {show:true, text:"Google"},
            yahoo       : {show:true, text:"Yahoo"},
            ical        : {show:true, text:"iCal / Apple"},
            hotmail     : {show:true, text:"Hotmail"},
            facebook    : {show:true, text:"Facebook Event"},
            dropdown    : {order:"google,ical,facebook,outlook,hotmail,yahoo"}
        });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript">
        $('.location-map').click(function () {
            $('.location-map iframe').css("pointer-events", "auto");
        });
        </script>
    </body>
</html>