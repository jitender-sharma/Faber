<?php //
if(empty($_COOKIE["sec2"])){
    header("location:sectors2_login.php");  
}

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
            <div style='padding:23px 0 0 35px; display:none;' id='titlez'>RENEWABLE ENERGY</div>
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
                <div id='services1' style='display:block'>
                    <h3>Renewable Energy</h3><br> 
                    Faber Capital has “hands-on” deal experience in the renewables sector across the full technology, project and transaction life cycle giving it access to equity / debt financing and deep market insights
                    <br><br>
                    
                    
                    
                    
                    <img src='images/diagram_solar.jpg'>
                    
                    <br><br><br><br>
                    <h3>Experience in Renewable Energy</h3>
                     <br>
                     
                    <table id='tab_client'>
			<tr>
				<td><img src='images/logo/microsol.jpg'></td>
				<td></td>
				<td>
                                    <span style="color:#0f823f;font-weight: bold;">Integrated solar player in UAE</span>
                                    <br><br><hr><br>
                                    <ul style='padding-left: 18px;'>
                                        <li>Sole advisor on Senior Syndicated facility (conventional and Islamic Tranche)</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/solon.jpg'></td> 
				<td></td>
				<td>
                                    <span style="color:#0f823f;font-weight: bold;">Global solar EPC Player, Module and Cell Manufacturer.</span>
                                    <br><br><hr><br>
                                    <ul style='padding-left: 18px;'>
                                        <li>Advising on business JVs and raising Equity and/or mezzanine Capital</li>
                                        <li>Buy-side Advisory to target BOSCH Solar assets (US$ 1 billion plus in book value) in a negative equity bid</li>
                                        <li>Advising restructuring of Solon’s German operations</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/saga_solar.jpg'></td>
				<td></td>
				<td>
                                    <span style="color:#0f823f;font-weight: bold;">10 MW Solar Project in Sri Lanka which is among the first utility scale solar project in the country</span>
                                    <br><br><hr><br>
                                    <ul style='padding-left: 18px;'>
                                        <li>Acting as lead developers and equity investors (50%)  along with assisting in raising debt through MFIs and local lenders</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/solar_pakistan.jpg'></td>
				<td></td>
				<td>
                                    <span style="color:#0f823f;font-weight: bold;">Developing 20 MW Solar Power Project in Pakistan under govt. tender</span>
                                    <br><br><hr><br>
                                    <ul style='padding-left: 18px;'>
                                        <li>Raising equity investment; raising debt through MFIs / Local lenders </li>
                                    </ul>
                                </td>
			</tr>   
			<tr>
				<td><img src='images/logo/solar_asset.jpg'></td>
				<td></td>
				<td>
                                    <span style="color:#0f823f;font-weight: bold;">Small scale solar PV assets of 52MW in Europe</span>
                                    <br><br><hr><br>
                                    <ul style='padding-left: 18px;'>
                                        <li>Advising sales for these assets, worth ~US$ 100 million, to a listed vehicle</li>
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
