<?php //
if(empty($_COOKIE["sec1"])){
    header("location:sectors1_login.php");  
}

//include 'include/functions.php';
//$expiry = checkExpiry($_COOKIE["uniq_id"]);
//if(!empty($_COOKIE["uniq_id"])){
//    if($expiry == 0){
//        setcookie("uniq_id", "", time() - 3600);   
//        header("location:credentials_login.php?e=201");  
//    }
//}

?>
 

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex">
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

        <div style='float:left; width:400px; position: absolute;'>
            <div style='padding:23px 0 0 35px; display:none;' id='titlez'>MINING & RESOURCES</div>
        </div>
        <div style='float:right; width:680px'>
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
                            <div class='sidemenu_txt_bold' id='e' onclick="location.href='sectors1.php'">Mining & Resources</div>
                        </div>

                        <div style='width:10px; height:10px;'></div>

                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="location.href='sectors2.php'">Renewable Energy</div>
                        </div>

                        <div style='width:10px; height:10px;'></div>

                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="location.href='sectors3.php'">Real Estate & Hospitality</div>
                        </div>

                    </div>
                </div>
            </td> 

            <td valign='top' style='padding:0 30px 0 0; text-align:justify'><br><br>
 
                <!-- content -->
                <div id='services3' style='display:block'>
                    <!--<div id='services3' style='display:none'>-->
                    <h3>Mining & Resources</h3><br>
                    Extensive experience in providing strategic corporate advisory and structured project finance solutions to clients across the industry
                    <br><br>
                    
                    
                    
                    
                    <img src='images/diagram_mining.jpg'>
                    
                    <br><br><br><br>
                    <h3>Select Mandates & Pipeline Deals</h3>
                     <br> 
                     
                    <table id='tab_client'>
			<tr>
				<td><img src='images/logo/mec.jpg'></td>
				<td></td>
				<td>
                                    <span style="color:#0f823f;font-weight: bold;">Integrated mining &amp; infrastructure (Rail and Port) company based in East Kalimantan, Indonesia</span>
                                    <br><br><hr><br>
                                    <ul style='padding-left: 18px;'>
                                        <li>Buy side advisory for a South East Asian client</li>
                                        <li>Advising on strategic advisory, asset acquisitions, structured financing and project financing</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/trimex.jpg'></td> 
				<td></td>
				<td>
                                    <span style="color:#0f823f;font-weight: bold;">Leading minerals and metals conglomerate located in UAE, India, Singapore and Indonesia</span>
                                    <br><br><hr><br>
                                    <ul style='padding-left: 18px;'>
                                        <li>Advising on strategic advisory, asset acquisitions, structured financing and project financing</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/parammitra.jpg'></td>
				<td></td>
				<td>
                                    <span style="color:#0f823f;font-weight: bold;">Coal mining company in Indonesia promoted by leading coal mining, coal washing and power company in India</span>
                                    <br><br><hr><br>
                                    <ul style='padding-left: 18px;'>
                                        <li>Advising on raising senior and mezzanine tranche for a coal company in Indonesia</li>
                                    </ul>
                                </td>
			</tr>
		</table>
                    
                
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
