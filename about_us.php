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
				<div style='padding:23px 0 0 35px; display:none;' id='titlez'>ABOUT US</div>
			</div>
			<div style='float:left; width:680px'>
				<canvas id="canvas" width="680" height="75" style="background-color:#ffffff"></canvas>
			</div>

		</div>
		<div style='width:1000px; height:2px; background-color:#dedede'></div>
		
		<!-- titlebar -->






<!-- content -->
		
		<div style='height:40px; background-color:#ffffff'></div>
		<div style='height:850px; background-color:#ffffff'>
			<div class='hl_space'></div>
			<div class='hl_wrap'>
				<div class='hl_title' id='title1' style='display:none'>WHO WE ARE</div>
				<div class='hl_text' id='text1' style='display:none; text-align:justify'>
					Faber Capital was formed by a group of International Bankers, Capital Markets & Private Equity professionals with decades of experience in Investing, Investment Banking & Capital Markets. The group possesses a wide range of geographic and industry expertise with unparalleled experience in advising clients through complex situations and transactions. It has a deep understanding of international capital markets and the appetite of Institutional Investors across Debt, Mezzanine and Equity layers.
				</div>
			</div>
	
			<div class='hl_space'></div>
			<div class='hl_sep' style='height:500px'></div>
			<div class='hl_space'></div>
	
			<div class='hl_wrap'>
				<div class='hl_title' id='title2' style='display:none'>WHAT WE DO</div>
				<div class='hl_text' id='text2' style='display:none; text-align:justify'>
					We work with clients on a retained basis, advising them on all their fundraising and strategic corporate transactions. We distinguish ourselves by helping clients develop corporate strategies, taking into account  prevailing capital market conditions in domestic and offshore markets and then assist in arranging funds through appropriate structures across the capital structure.
<br><br>
Faber’s asset management advisory business focuses on the Infrastructure sector in India, and other asset classes in Sri Lanka and the Middle East. In the Infrastructure space, Faber attempts a relatively de-risked model by looking for investment opportunities in projects nearing the Last Mile of their development life cycle.
<br><br>
We pride ourselves in helping our clients address complex transformational challenges by developing innovative, practical solutions. 

				</div>
			</div>
	
			<div class='hl_space'></div>
			<div class='hl_sep' style='height:680px'></div>
			<div class='hl_space'></div>
	
			<div class='hl_wrap'>
				<div class='hl_title' id='title3' style='display:none'>CONTACT DETAILS</div>
				<div class='hl_text' id='text3' style='display:none'>
				
				
				Faber Capital and its Partner Firms - Singapore, Delhi, Mumbai, Colombo, Dubai & Kampala<br><br> 

    <ul class='contact'>
        <li>
            <b>Dubai</b><br>
            Office 104, Gate Village Building 7,<br>
            Dubai International Financial Centre (regulated by DFSA, incorporated under the DIFC with License No. CL2127),<br>
			P.O. Box 507000, Dubai, UAE<br>
            Contact +971(0)43523775
            <br><br>
	</li>
        <li>
            <b>Gurgaon</b><br>
            904 - B, Global Business Park <br>
            MG Road, Gurgaon - 122002,<br>India<br>
            Contact +91 124 4209929
             <br><br>
	</li>
        <li>
            <b>Mumbai</b><br>
            20 A Maheshwari Mansion<br>
            34 L Jagmohandas Marg<br>
            Napean Sea Road,<br>Mumbai- 400036<br>
            Contact  +919987213071
             <br><br>
	</li>
        <li>
            <b>Colombo</b><br>
            32 Castle street,<br>
            Colombo, Sri Lanka<br>
            Contact +94112689855
             <br><br>
	</li>
        <li>
            <b>Singapore</b><br>
            137, Market Street, #06-05<br>
            Singapore - 048943<br>
            Contact  +6597228021
             <br><br>
	</li>
        <li>
            <b>Kampala</b><br>
            Second Floor<br>
            Kampala Boulevard<br>
            Kampala Road<br>
            Kampala, Uganda<br>
            Contact +256782793960
             <br><br>
	</li>
    
      
	<!--
	<li>
		<b>Sri Lanka</b><br>
		_ __, Colombo,<br>Phone: __________
	</li>
	-->	  
</ul>


<br><br><br>
				
				
				
Email: <a href='mailto:Info@fabercapital.com'>Info@fabercapital.com</a>
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
