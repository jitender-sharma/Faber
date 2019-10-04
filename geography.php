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
				<div style='padding:23px 0 0 35px; display:none;' id='titlez'>GEOGRAPHY</div>
			</div>
			<div style='float:left; width:680px'>
				<canvas id="canvas" width="680" height="75" style="background-color:#ffffff"></canvas>
			</div>

		</div>
		<div style='width:1000px; height:2px; background-color:#dedede'></div>
		
		<!-- titlebar -->
		
 


		<!-- content -->
<div style='height:40px; background-color:#ffffff'></div>
<div style='min-height:1000px; background-color:#ffffff; padding-bottom:100px'>
        <div style='margin:0 30px; text-align:justify'>
            We undertake mandates in regions where our teams have strong expertise and we can add long term value
            <br><br>
        </div>
    
        <div style='margin-bottom: 100px'>
            <img src='images/map.jpg'>
        </div>
         
        <div style='margin:0 30px'>
            <ul class='map_contact'>
                <li>
                    <span class='country'>Dubai</span><hr style='margin-top:5px'><br>
                    Office 104, Gate Village Building 7,<br>
                    Dubai International Financial Centre (regulated by DFSA, incorporated under the DIFC with License No. CL2127),<br>
                    P.O. Box 507000, Dubai, UAE<br><br>
                    Contact +971(0)43523775
                </li>
                <li>
                    <span class='country'>Gurgaon</span><hr style='margin-top:5px'><br>
                    904 - B, Global Business Park<br>
                    MG Road, Gurgaon - 122002,<br>
                    India<br><br>
                    Contact +91 124 4209929
                </li>
                <li>
                    <span class='country'>Mumbai</span><hr style='margin-top:5px'><br>
                    20 A Maheshwari Mansion<br>
                    34 L Jagmohandas Marg<br>
                    Napean Sea Road,<br>
                    Mumbai- 400036<br><br>
                    Contact  +919987213071
                </li>
                <li>
                    <span class='country'>Colombo</span><hr style='margin-top:5px'><br>
                    32 Castle street,<br>
                    Colombo, Sri Lanka<br><br>
                    Contact +94112689855
                </li>
                <li>
                    <span class='country'>Singapore</span><hr style='margin-top:5px'><br>
                    137, Market Street, #06-05<br>
                    Singapore - 048943<br><br>
                    Contact  +6597228021
                </li>
 				<li>
					<span class='country'>Kampala</span><hr style='margin-top:5px'><br>
					Second Floor<br>
					Kampala Boulevard<br>
					Kampala Road<br>
					Kampala, Uganda<br>
					Contact +256782793960
				</li>
                <li>
                    <span class='country'>Write to Us</span><hr style='margin-top:5px'><br>
                    Email: <a href="mailto:vandana.g@fabercapital.com">Vandana.G@FaberCapital.com</a>
                </li>
            </ul>
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
