<?php //
// Print an individual cookie
if(empty($_COOKIE["admin"])){
    header("location:admin_login.php");  
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
<link rel="stylesheet" type="text/css" media="screen" href="css/login.css">


<link href='css/table.css' rel='stylesheet' type='text/css'/>
    
<link rel="shortcut icon" type="image/ico" href="favicon.ico"/> 
<script src="js/faber.js" type="text/javascript"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type='text/javascript' src='js/jquery.tablesorter.js'></script>

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
                        <div style='padding:23px 0 0 35px; display:none;' id='titlez'>ADMIN</div>
                </div>
                <div style='float:left; width:680px'>
                        <canvas id="canvas" width="680" height="75" style="background-color:#ffffff"></canvas>
                </div>
            </div>
            <div style='width:1000px; height:2px; background-color:#dedede'></div>
            <!-- titlebar -->




            <!-- content -->
            <?php 
            include 'include/functions.php';
            echo admin_userlist();
            ?>

 


        </div>
        <div class="push"></div>
    </div>






    <!-- footer -->
    <div class="footer">
    <?php include("include/footer.php"); ?>
    </div> 
    <!-- footer -->
















<script>
    $(function() {
        $('#myTable').tablesorter({widgets: ['zebra']});
    });
</script>




</body>
</html>
