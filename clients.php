<?php //
if(empty($_COOKIE["client"])){
    header("location:clients_login.php");  
}
//
//include 'include/functions.php';
//$expiry = checkExpiry($_COOKIE["uniq_id"]);
//if(!empty($_COOKIE["uniq_id"])){
//    if($expiry == 0){
//        setcookie("uniq_id", "", time() - 3600);
//        header("location:clients_login.php?e=201");  
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
				<div style='padding:23px 0 0 35px; display:none;' id='titlez'>CLIENTS</div>
			</div>
			<div style='float:left; width:680px'>
				<canvas id="canvas" width="680" height="75" style="background-color:#ffffff"></canvas>
			</div>

		</div>
		<div style='width:1000px; height:2px; background-color:#dedede'></div>
		
		<!-- titlebar -->
		
 


		<!-- content -->
<div style='height:40px; background-color:#ffffff'></div>
<div style='min-height:900px; background-color:#ffffff; padding-bottom:100px'>
	<div>
		<div style='margin:0 30px; text-align:justify'>
		Faber Capital has clients across medium to large sized companies across sectors and countries. Some of our completed and ongoing transactions are profiled below:
		<br><br> 
		
		<table id='tab_client'> 
			<tr>
				<td><img src='images/logo/mec.jpg'></td>
				<td width='20'></td>
				<td>
                                    <ul>
                                        <li>Integrated mining & infrastructure (Rail and Port) company based in East Kalimantan, Indonesia</li>
                                        <li>Buy side advisory for a South East Asian client</li>
                                        <li>Advising on strategic advisory, asset acquisitions, structured financing and project financing</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/microsol.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Vertically integrated player in crystalline silicon (cSi) technology space in UAE</li>
                                        <li>Sole advisor on Senior Syndicated facility (conventional and Islamic Tranche)</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/solon.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Leading international provider of solar solutions for residential, commercial and utility-scale applications</li>
                                        <li>Advising on business tie-ups and raising mezzanine financing</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/trimex.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Leading minerals and metals conglomerate located in UAE, India, Singapore and Indonesia</li>
                                        <li>Advising on strategic advisory, asset acquisitions, structured financing and project financing</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/srei.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Infrastructure project finance group providing term loans and leasing solutions to key infrastructure sectors in India</li>
                                        <li>Sole Advisor in raising offshore and onshore funds (Bonds and Loans), M&A advisory and Strategic tie-ups</li>
                                        <li>Arranging financing for an infrastructure project in Sri Lanka</li>
                                    </ul>
                                </td>
			</tr>   
			<tr>
				<td><img src='images/logo/parammitra.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Coal mining company in Indonesia promoted by leading coal mining, coal washing and power company in India</li>
                                        <li>Advising on raising senior and mezzanine tranche for a coal company in Indonesia</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
				<td><img src='images/logo/leela.jpg'></td>
				<td></td>
				<td>
                                    <ul>
                                        <li>Leading luxury (upper-upscale) hotel & resorts owner / operator in India</li>
                                        <li>Sole advisor for strategic expansion to key regional markets, entry strategy (JV, HMA) and capital raising</li>
                                    </ul>
                                </td>
			</tr>
			<tr>
                            <td><img src='images/logo/daralarkam.jpg'></td>
                            <td></td>
                            <td>
                                <ul>
                                    <li>Largest property development company in Saudi Arabia</li>
                                    <li>Successfully advised Chairman’s office on a Sukuk fund raising effort</li>
                                </ul>
                            </td>
			</tr>
			<tr>
                            <td><img src='images/logo/browns.jpg'></td> 
                            <td></td>
                            <td>
                                <ul>
                                    <li>Listed owner / operator of hotels & resorts in Sri Lanka, an emerging market destination</li>
                                    <li>Sole advisor for development and roll out of large land bank across the island</li>
                                    <li>Negotiating & structuring sale of an under construction 5-star asset to accelerate process & retain majority</li>
                                </ul>
                            </td>
			</tr>
			<tr>
                            <td><img src='images/logo/omniyat.jpg'></td>
                            <td></td>
                            <td>
                                <ul>
                                    <li>Mandated to advise a luxury, mixed use real estate developer in the Gulf Region</li>
                                    <li>Assisting and advising capital raising strategy for a luxury, high end residential project in a key Dubai location</li>
                                    <li>Advising on structuring and capital raising for a mixed use project in a high traffic commercial location in Dubai</li>
                                </ul>
                            </td>
			</tr>
			<tr>
                            <td><img src='images/logo/arabbanking.jpg'></td>
                            <td></td>
                            <td> 
                                <ul>
                                    <li>International universal bank with network across 18 countries in MENA, Europe, the Americas and Asia</li>
                                    <li>Assisting in defining the strategy, objectives and structure for setting up of their Capital Markets program in MENA</li>
                                </ul>
                            </td>
			</tr>
			<tr>
                            <td><img src='images/logo/rakindo.jpg'></td>
                            <td></td>
                            <td>
                                <ul>
                                    <li>Real Estate developing company promoted by the Government of Ras al Khaimah, UAE and the Trimex Group</li>
                                    <li>Arranging financing for infrastructure projects in India</li>
                                </ul>
                            </td>
			</tr>
			<tr>
                            <td><img src='images/logo/warwick.jpg'></td>
                            <td></td>
                            <td>
                                <ul>
                                    <li>International, privately owned multi-brand operator, well positioned in the 4-star+ city hotel market</li>
                                    <li>Expanding regional presence (11 signed hotels in Middle East, South Asia region, incl. UAE, Lebanon, Iraq)</li>
                                    <li>Assisting in executing India strategy (city selection, owner introduction); discussing wider strategic initiative</li>
                                </ul>
                            </td>
			</tr>
			<tr>
                            <td><img src='images/logo/athena.jpg'></td>
                            <td></td>
                            <td>
                                <ul>
                                    <li>Large private independent power producer in the Indian power sector</li>
                                    <li>Advising on strategic tie-ups and capital raising</li>
                                </ul>
                            </td>
			</tr>
		</table>
		</div>
	</div>
</div>

<!-- content -->

		

		</div>

<div class="push"></div>

</div>


 



<!-- footer -->
<div class="footer">
<?php include("include/footer.php"); ?>
</div> 
<!-- footer -->



















</body>
</html>
