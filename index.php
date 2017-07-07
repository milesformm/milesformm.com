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
            .button.button-smaller {
              font-size: 15px;
            }
            .button.button-disabled {
              background: #ccc;
              color: #4f4f4f;
              border: 0;
              box-shadow: none;
              text-shadow: none;
              cursor: not-allowed;
            }
            .button.button-disabled {
              background: #ccc;
            }
            .text-disabled {
              color: #aaa;
            }

            #container { max-width: 780px; margin: 0 auto;  }
            #content { position: relative; }
        

            /* Full screen */
            @media only screen and (min-width : 790px) {
                
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
            .tshirtnote {
                padding-top: 0;
                margin-bottom: 12px;
                font-size: 12px;
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
            <div id="left">
              <h3>Dear EIMM Friends,</h3>
              <p>After long, serious thought, we regretfully announce that there will be no EIMM Walk/Run this October.  After five incredible years of working with all of you, it's time to give our attention to many other things we hold dear.  We continue to support the Multiple Myeloma Research Foundation and firmly believe in its mission.</p>

              <p>Join us September 24 for the MMRF 5K Walk/Run in Minneapolis <a href="https://walkrun.themmrf.org/twin-cities">https://walkrun.themmrf.org/twin-cities</a>, and donate to the foundation: <a href="https://www.themmrf.org/donate-to-mmrf/">https://www.themmrf.org/donate-to-mmrf/</a>.</p>

              <p>Effusive thanks to the walkers, runners, volunteers, team members, sponsors, and families (including our own) for support beyond what we ever dreamed possible.  We wish you health and love. </p>

              <p>Dan and Laurie</p>

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
