<?php //
if(empty($_COOKIE["sec3"])){
    header("location:sectors3_login.php");  
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
            <div style='padding:23px 0 0 35px; display:none;' id='titlez'>REAL ESTATE & HOSPITALITY</div>
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
                

                <div id='services2' style='display:block'>

                    <!--<div id='services2' style='display:none'>-->
                    <h3>Real Estate & Hospitality</h3><br>
                    Team members bring a track record of value creation to Faber, combining development experience, C-level access to proven investors and market intelligence, enabling us to focus on originating & structuring high quality transactions
                     <br><br>
                    
                    
                    
                    
                    <img src='images/diagram_realestate.jpg'>
                    <br><br><br><br>
                    <img src='images/slide_realestate.jpg'>
                    
                    <br><br><br><br>
                    <h3>Experience in Real Estate</h3>
                     <br>
                     
                    <table id='tab_client'>
			<tr>
                            <td><img src='images/logo/daralarkam.jpg'></td>
                            <td></td>
                            <td>
                                <span style="color:#0f823f;font-weight: bold;">Largest property development company in Saudi Arabia</span>
                                <br><br><hr><br>
                                <ul style='padding-left: 18px;'>
                                    <li>Successfully advised Chairman’s office on a Sukuk fund raising effort</li>
                                </ul>
                            </td>
			</tr>
			<tr>
                            <td><img src='images/logo/leading_bank.jpg'></td>
                            <td></td>
                            <td>
                                <span style="color:#0f823f;font-weight: bold;">Distressed real estate asset portfolio of a leading bank in the UAE</span>
                                <br><br><hr><br>
                                <ul style='padding-left: 18px;'>
                                    <li>Advising and assisting on achieving exit opportunities and restructuring of few real estate assets</li> 
                                </ul>
                            </td>
			</tr>
			<tr>
                            <td><img src='images/logo/luxury_realestate.jpg'></td>
                            <td></td> 
                            <td>
                                <span style="color:#0f823f;font-weight: bold;">Luxury, mixed use real estate developer in the Gulf Region</span>
                                <br><br><hr><br>
                                <ul style='padding-left: 18px;'>
                                    <li>Assisting and advising capital raising strategy for a luxury, high end residential project in a key Dubai location</li>
                                    <li>Advising on structuring and capital raising for a mixed use project in a high traffic commercial location in Dubai</li>
                                </ul>
                            </td>
			</tr>
			<tr>
                            <td><img src='images/logo/large_realestate.jpg'></td>
                            <td></td>
                            <td>
                                <span style="color:#0f823f;font-weight: bold;">Real Estate developing company promoted by a leading Indian Group</span>
                                <br><br><hr><br>
                                <ul style='padding-left: 18px;'>
                                    <li>Arranging financing for real estate projects in India</li>
                                </ul>
                            </td>
			</tr>
                        
                        
                     
		</table>




<br><br><br><br><br><br>
                <!--<div id='services2' style='display:none'>-->
                    Consistently creating value by combining strategically packaged opportunities with the right client and the right geography, thus creating a winning combination
                     <br><br>
                    
                    
                    
                    
                    <img src='images/diagram_hotels.jpg'>
                    
                    <br><br><br><br>
                    <h3>Hospitality Sector Experience</h3>
                     <br>
                     
                    <table id='tab_client'>
			<tr>
                            <td><img src='images/logo/browns.jpg'></td>
                            <td></td>
                            <td>
                                <span style="color:#0f823f;font-weight: bold;">Listed owner / operator of hotels & resorts in Sri Lanka, an emerging market destination</span>
                                <br><br><hr><br>
                                <ul style='padding-left: 18px;'>
                                    <li>Sole advisor for development and roll out of large land bank across the island</li>
                                    <li>Sell side advisory for an under construction 5-star asset to accelerate process & retain majority</li>
                                </ul>
                            </td>
			</tr>
			<tr>
                            <td><img src='images/logo/leela.jpg'></td>
                            <td></td>
                            <td>
                                <span style="color:#0f823f;font-weight: bold;">Leading luxury (upper-upscale) hotel & resorts owner / operator in India</span>
                                <br><br><hr><br>
                                <ul style='padding-left: 18px;'>
                                    <li>Sole advisor for strategic expansion to key regional markets, entry strategy (JV, HMA) and capital raising</li> 
                                </ul>
                            </td>
			</tr>
			<tr>
                            <td><img src='images/logo/hotel_dubai.jpg'></td>
                            <td></td> 
                            <td>
                                <ul style='padding-left: 18px;'>
                                    <li>Assessing last mile funding opportunity for a 192 key, four star plus city hotel in a key location</li>
                                    <li>Stalled project with completed superstructure, being repurposed from commercial to hospitality</li>
                                </ul>
                            </td>
			</tr>
			<tr>
                            <td><img src='images/logo/hotel_fujairah.jpg'></td>
                            <td></td>
                            <td>
                                <ul style='padding-left: 18px;'>
                                    <li>Mandated to secure last mile funding for a five star hotel and residential complex</li>
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
