<?php //
if(empty($_COOKIE["uniq_id"])){
    header("location:credentials_login.php");  
}

include 'include/functions.php';
$expiry = checkExpiry($_COOKIE["uniq_id"]);
if(!empty($_COOKIE["uniq_id"])){
    if($expiry == 0){
        setcookie("uniq_id", "", time() - 3600);   
        header("location:credentials_login.php?e=201");  
    }
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

        <div style='float:left; width:320px'>
            <div style='padding:23px 0 0 35px; display:none;' id='titlez'>SECTOR CREDENTIALS</div>
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
                            <div class='sidemenu_txt_bold' id='e' onclick="setSVC1()">Renewable Energy</div>
                        </div>

                        <div style='width:10px; height:10px;'></div>

                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="setSVC2()">Real Estate & Hospitality</div>
                        </div>

                        <div style='width:10px; height:10px;'></div>

                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="setSVC3()">Mining & Resources</div>
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
                    
                    
                    
                    
                    <img src='images/slide1.jpg'>
                    
                    <br><br><br><br>
                    <h3>Experience in Renewable Energy</h3>
                     <br>
                     
                    <table id='tab_client'>
			<tr>
				<td><img src='images/logo/microsol.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Completed advising on Senior Syndicated facility (conventional and Islamic Tranche)</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/solon.jpg'></td> 
				<td></td>
				<td>
                                    <ul>
                                        <li>Advising on business tie-ups and raising mezzanine financing for a global Solar Panels player in UAE; Buy-side Advisory to target Bosch Solar assets (US$ 1 billion plus in book value) in a negative equity bid; Advising on restructuring of German operations</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/saga_solar.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Acting as lead developers and equity investors (50%) for a 10MW Solar Project, among the first utility scale solar project in Sri Lanka, along with raising debt through MFIs and local lenders</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/solar_pakistan.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Advising in raising equity investment and debt through MFIs / Local lenders for a 20 MW Solar Power Project in Pakistan</li>
                                    </ul>
                                </td>
			</tr>   
			<tr>
				<td><img src='images/logo/empereal.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Advising a dominant upcoming Indian Technocrat for participating in 100 MW Solar PV tender in Dubai with offtake by DEWA (Dubai Electricity & Water Authority)</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/solar_asset.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Advising sales for small scale Solar PV Assets of 52MW in Europe, worth ~US$ 100 million, to a listed vehicle </li>
                                    </ul>
                                </td>
			</tr>
		</table>
                    
                    
                </div>

                <div id='services2' style='display:none'>

                    <!--<div id='services2' style='display:none'>-->
                    <h3>Real Estate & Hospitality</h3><br>
                    Team members bring a track record of value creation to Faber, combining development experience, C-level access to proven investors and market intelligence, enabling us to focus on originating & structuring high quality transactions
                     <br><br>
                    
                    
                    
                    
                    <img src='images/slide2.jpg'>
                    
                    <br><br><br><br>
                    <h3>Select Mandates & Pipeline Deals</h3>
                     <br>
                     
                    <table id='tab_client'>
			<tr>
				<td><img src='images/logo/conglomerate_srilanka.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Advising a Large Conglomerate in Sri Lanka in structuring sale of an under construction 5-star asset; advising for development and roll out of large land bank across the island</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/leela.jpg'></td> 
				<td></td>
				<td>
                                    <ul>
                                        <li>Advising for strategic expansion to key regional markets, entry strategy (JV, HMA) and capital raising </li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/warwick.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Advising a Multi-brand Operator in expanding regional presence and executing India strategy (city selection, owner introduction) and wider strategic initiative</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/omniyat.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Advising a luxury, mixed use Real Estate Developer in the Gulf Region in capital raising strategy for a luxury, high end residential project and structuring and capital raising for a mixed use project in key locations in Dubai</li>
                                    </ul>
                                </td>
			</tr>   
			<tr>
				<td><img src='images/logo/dubai.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Advising in last mile funding opportunity for a 192 key, four star plus city hotel in a key location and strategy for a stalled project with completed superstructure being repurposed from commercial to hospitality</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/fujairah.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Advising to secure last mile funding for a five star hotel and a residential complex</li>
                                    </ul>
                                </td>
			</tr> 
		</table>
                    
                </div>


                <div id='services3' style='display:none'>
                    <!--<div id='services3' style='display:none'>-->
                    <h3>Mining & Resources</h3><br>
                    Extensive experience in providing strategic corporate advisory and structured project finance solutions to clients across the industry
                    <br><br>
                    
                    
                    
                    
                    <img src='images/slide3.jpg'>
                    
                    <br><br><br><br>
                    <h3>Select Mandates & Pipeline Deals</h3>
                     <br>
                     
                    <table id='tab_client'>
			<tr>
				<td><img src='images/logo/mec.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Completed buy side advisory of MEC (a large coal company in Indonesia) for a South East Asian based Investment Vehicle</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/trimex.jpg'></td> 
				<td></td>
				<td>
                                    <ul>
                                        <li>Advising a Mining and Minerals Group in India on strategic advisory, asset acquisitions, structured financing and project financing</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/parammitra.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Advising on raising senior and mezzanine tranche for a Coal company in Indonesia</li>
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
