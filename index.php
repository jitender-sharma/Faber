<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

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
				
				$('#title1').fadeIn('slow');
				$('#text1').delay(400).fadeIn('fast');
				$('#title2').fadeIn('slow');
				$('#text2').delay(400).fadeIn('fast');
				$('#title3').fadeIn('slow');
				$('#text3').delay(400).fadeIn('fast');
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


<div class="wrapper" style='background-image:url(images/bgz.jpg); background-repeat: no-repeat;'>

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
	



		
		<div class='img_home'></div>
		

		<!-- titlebar -->
		
		<div class='titlebar' id='tbar' style='display:none'>
			
			<div style='float:left; width:320px'>
				<div style='padding:23px 0 0 35px; display:none;' id='titlez'>HOME</div>
			</div>
			<div style='float:left; width:680px'>
				<canvas id="canvas" width="680" height="75" style="background-color:#ffffff"></canvas>
			</div>

		</div>
		<div style='width:1000px; height:2px; background-color:#dedede'></div>
		
		<!-- titlebar -->





		

		<!-- content -->
		
		<div style='height:40px; background-color:#ffffff'></div>
		<div style='height:250px; background-color:#ffffff'>
                    <div class='hl_text' id='text1' style='display:none;padding:0 35px; text-align:justify'>
                    
                    Faber Capital is a Financial Advisory firm  characterized by a deep commitment to creating exceptional value for our clients in Asia, Africa and the Middle East. We provide investment banking, capital markets and asset management advisory solutions. 
<br><br>
Founded by a group of senior Investment Bankers and Finance professionals, Faber Capital partners have a deep understanding of Local and Cross-border pools of Capital across the capital structure.  
<br><br>
Faber Capital with its Partner Firms has offices in Singapore, Mumbai, Delhi, Colombo, Dubai DIFC (regulated by DFSA) and Kampala.

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
