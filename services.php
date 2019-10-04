<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>FABER CAPITAL</title>

<link rel="stylesheet" href="css/fonts.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="css/layout.css">
<link rel="shortcut icon" type="image/ico" href="favicon.ico"/> 
<script src="js/faber.js" type="text/javascript"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

<script>
    $(function() {
        $('#tbar').slideDown(400);
        $('#titlez').slideDown(400);
    });
</script>
<script src="http://code.createjs.com/easeljs-0.5.0.min.js"></script>
<script src="http://code.createjs.com/tweenjs-0.3.0.min.js"></script>
<script src="http://code.createjs.com/movieclip-0.5.0.min.js"></script>
<script src="http://code.createjs.com/preloadjs-0.2.0.min.js"></script>
<script src="include/html5/tbar.js"></script>		
		
<script>
    var canvas, stage, exportRoot;

    function init() {
        canvas = document.getElementById("canvas");
        images = images||{};

        var manifest = [
                {src:"include/html5/images/grid.jpg", id:"grid"},
                {src:"include/html5/images/grid2.jpg", id:"grid2"}
        ];

        var loader = new createjs.PreloadJS(false);
        loader.onFileLoad = handleFileLoad;
        loader.onComplete = handleComplete;
        loader.loadManifest(manifest);
    }

    function handleFileLoad(o) {
        if (o.type == "image") { images[o.id] = o.result; }
    }

    function handleComplete() {
        exportRoot = new lib.tbarhome();

        stage = new createjs.Stage(canvas);
        stage.addChild(exportRoot);
        stage.update();

        createjs.Ticker.setFPS(24);
        createjs.Ticker.addListener(stage);
    }
</script>
		
</head>

<body onload="init();">





<div style='width:100%; position:absolute; z-index:3; '>
<div style='width:1084px; margin:0px auto;'>
    <div style='height:150px;'>
        <div style='padding: 50px 0 0 42px'>
            <img src='images/logo.png'>
        </div>
    </div>
</div>
</div>


<div style='width:100%; height:21px; background-image:url(images/sd.png); position:absolute; z-index:2; margin:120px 0 0 0;'></div>
<div style='width:100%; height:140px; background-color:#ffffff; position:absolute; z-index:1;'></div>


<div class="wrapper" style='background-image:url(images/bgz2.jpg); background-repeat: no-repeat;'>

<div style='width:1000px; margin:0 auto;'>

    <!-- header -->
    <div style='height:150px;'>
        <div style='padding: 50px 0 0 0'>
            <img src='images/logo.png'>
        </div>
    </div>

    <div style='width:1000px; height:45px; background-color:#0f823f'>
        <div class='header'>
            <div style='float:right'>
                <?php include("include/menu.php"); ?>
            </div>
        </div>
    </div>
    <!-- header -->

    
    <div class='img_typ'></div>



    <!-- titlebar -->
    <div class='titlebar' id='tbar' style='display:none'>

        <div style='float:left; width:320px'>
            <div style='padding:23px 0 0 35px; display:none;' id='titlez'>SERVICES</div>
        </div>
        <div style='float:left; width:680px'>
            <canvas id="canvas" width="680" height="75" style="background-color:#ffffff"></canvas>
        </div>

    </div>
    <div style='width:1000px; height:2px; background-color:#dedede'></div>
    <!-- titlebar -->

    <div style='height:5px; background-color:#ffffff'></div>

    <table border='0' cellpadding='0' cellspacing='0' bgcolor='#ffffff'>
        <tr>
            <td valign='top' style='padding:0 30px;'>
                <div class='sidemenu'>
                    <div style='padding:25px 20px; height:500px'>
                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="setSVC1()">Capital Raising</div>
                        </div>

                        <div style='width:10px; height:10px;'></div>

                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="setSVC2()">Advisory & M&A</div>
                        </div>

                        <div style='width:10px; height:10px;'></div>

                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="setSVC3()">Asset Management</div>
                        </div>

                    </div>
                </div>
            </td>

            <td valign='top' style='padding:0 30px 0 0; text-align:justify'><br><br>

                <!-- content -->
                <div id='services1' style='display:block'>
                    <h3>Capital Raising</h3><br>
                    Faber Capital is advising companies in diverse sectors including mining & minerals, power, coal, waste management, financial services and infrastructure.
                    <br><br>
                    Professionals at Faber Capital help clients in raising financing across the capital structure from senior debt to mezzanine structures and equity capital. We devise and execute optimal debt and equity structures that complement each client’s business strategies by:

                    <br><br>
                    <ul>
                            <li>undertaking an in-depth review of a client’s business, asset / liability mix and ongoing liquidity needs</li>
                            <li>assisting them in effectively presenting their business model and strengths and in improving their credit and risk profile</li>
                            <li>using our knowledge of  markets and investors to identify accessible liquidity pools</li>
                            <li>balancing the inter-relationships and potential conflicts among parties involved in different layers of the capital structure</li>
                    </ul>
                    <br>
                    Faber Capital has been able to successfully close debt and equity transactions under difficult market conditions by using its team’s expertise and vast experience. The firm also helps its clients in successfully renegotiating and restructuring complex credit facilities with diverse lender groups.
                </div>

                <div id='services2' style='display:none'>

                    <!--<div id='services2' style='display:none'>-->
                    <h3>Advisory & M&A</h3><br>
                    Our Corporate Finance professionals provide a full range of M&A and financial advisory services, from acquisitions and disposals, through to equity and debt raising, debt refinancing, public-private partnership arrangements and complex procurement, across all industry sectors, to corporations, private equity firms, public sector bodies, sovereign wealth and other investment funds.<br><br>
                    Our international network makes the difference because we have a talented team of specialists operating in Asia, Middle East and India —we can deploy our professionals whenever and wherever you are doing deals.<br><br>
                    We have extensive industry capabilities, local market knowledge and are building a track record advising both corporate clients and institutional investors. Our Corporate Finance services include, Mergers & acquisitions advisory (buy & sell), Advice on fundraising, Project finance, Private equity advisory and Divestiture advice.

                </div>


                <div id='services3' style='display:none'>
                    <!--<div id='services3' style='display:none'>-->
                    <h3>Asset Management</h3><br>
                    Faber’s Asset Management Advisory focuses on the Infrastructure sector in India, Sri Lanka and the Middle East. Infrastructure sector, although offers high returns on investments, is perceived to be risky at the moment given a range of policy and approval issues. Faber attempts a relatively de-risked model by looking for investment opportunities in projects nearing the Last Mile of their development life cycle. Please note we do not provide asset management services from our DIFC office.
                </div>
                <!-- content -->

                <br><br><br><br>

            </td>
        </tr>
    </table>
</div>

<div class="push"></div>

</div>

<!-- footer -->
<div class="footer">
<?php include("include/footer.php"); ?>
</div> 
<!-- footer -->

</div>
</div>
</body>
</html>