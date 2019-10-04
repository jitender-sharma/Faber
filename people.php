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
				<div style='padding:23px 0 0 35px; display:none;' id='titlez'>PEOPLE</div>
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
                    <div style='padding:25px 20px;'>
                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="setP1()">Deepak Kohli</div>
                        </div>

                        <div style='width:10px; height:10px;'></div>
                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="setP2()">Andy Raheja</div>
                        </div>

                        <div style='width:10px; height:10px;'></div>
                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="setP3()">Rajat Surey</div>
                        </div>

                        <div style='width:10px; height:10px;'></div>
                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="setP4()">Dilshan Hettiaratchi</div>
                        </div>


                        <div style='width:10px; height:10px;'></div>
                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="setP5()">Rupesh Hindocha</div>
                        </div> 
                         
                        
                        <!--<div style='width:10px; height:10px;'></div>
                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="setP6()">Nadia Zubairi</div>
                        </div>-->

                        <div style='width:10px; height:10px;'></div>
                        <div>
                            <div class='sidemenu_txt_bold' id='e' onclick="setP7()">Shyam Shirke</div>
                        </div>

                    </div>
		</div>
		</div>
		
		
		</td>
		
		<td valign='top' style='padding:0 30px 0 0; text-align:justify'><br><br>

		<!-- content -->
			
			<div>
				Faber Capital’s partners are highly experienced Capital Markets, M&A and Private Equity professionals most of the senior professionals having worked together for many years. They possess a wide range of industry expertise and have unparalleled experience in advising clients through the complex transactions and situations. The partners are ably supported by a team of Transactors and Associates with execution experience in their respective domains.<br><br><br><br>
				
                                <div id='people1' style='display:block'>
                                    <div style='font-size:16px; margin:0 0 10px 0'><b>Deepak Kohli</b><br><span style='font-size:13px; color:#aaaaaa'>CEO & Senior Managing Director</span></div><hr><br>
                                    <div>

                                        <ul class='contact'>
                                            <li>Prior to joining Faber Capital, Deepak held various Global and Regional positions in the Capital Markets business at <b>Standard Chartered Bank (SCB)</b> between 2004 and 2012. These included <b>Global Head, Debt Capital Markets (Singapore), Regional Head of Capital Markets MENA and South Asia (India).</b> 
                                                Capital markets business at SCB included Bonds, Securitizations, Convertibles, Private Financing and Loan Syndications.<br><br></li>
                                            <li>Deepak established SCB’s Capital Markets business in the Middle East (MENA and GCC) in 2004 that attained leading position within 2 years reaching #1 on DCM League table in 2010 and 2011. Similarly Deepak led the transformation of India Capital markets from a largely Local Currency business to a strong Capital markets House across all cross-border and domestic products including G3 Bonds and Convertibles.<br><br></li>
                                            <li>In 2006 Deepak moved to Singapore as Global Head, DCM. Under Deepak’s leadership, SCB Capital Markets developed strong positions amongst all major clients in Asia, Africa and the Middle East lead-arranging deals of hundreds of Billions. Deepak led many landmark Capital Market deals for its clients across Asia, India and Middle East. Some examples - Tata Steel, Emirates Airlines, Dubai Government, Indian Oil, Q-Tel, Indonesian Government, Capital Land, PTT, IPIC, Mubadala, World bank, Islamic Development Bank and scores of Commercial banks in Middle-East, India and Asia.<br><br></li>
                                            <li>Deepak has strong relationships with all major Financial Institutions, Banks, Sovereign Funds, Private Equity Funds, Large Businesses and the Government in the Middle East. Previously, Deepak Headed for NBAD’s Investment Banking Division.<br><br></li>
                                            <li>
                                                Prior to SCB <br>  
                                                <ul class='contact'>
                                                      <li>Deepak Headed Corporate Finance, ECM and Asset Management businesses at <b>NBAD</b>’s Investment Banking Division.<br><br></li>
                                                      <li>Worked at <b>Price WaterHouse, GE Advisors Office (India) and Ernst & Young</b></li>
                                                </ul>
                                            </li>
                                        </ul>



                                    </div>
				</div>
				
				
				<div id='people2' style='display:none'>
                                    <div style='font-size:16px; margin:0 0 10px 0'>
                                        <b>Andy Raheja</b><br>
                                        <span style='font-size:13px; color:#aaaaaa'>Managing Director</span>
                                    </div><hr><br>
                                    <div>
                                        Andy was most recently the CFO of the largest listed real estate company in Saudi Arabia. In the last decade, as the CFO of some of the leading companies in the Middle East, he has gained valuable experience of managing growth as well as executing turnarounds. During this period he has overseen debt and loan fundraising programs as also mezzanine and equity fundraising from international financial institutions. Prior to that, as Director of Arthur Andersen’s  Corporate Finance practice based in London, Andy advised and led a variety of cross-border merger & acquisition, restructuring and privatization transactions. He has experience of working with clients in the US, Europe, Middle East and India.
                                    </div>
				</div>
				
				<div id='people3' style='display:none'>
                                    <div style='font-size:16px; margin:0 0 10px 0'>
                                        <b>Rajat Surey</b><br>
                                        <span style='font-size:13px; color:#aaaaaa'>Global Head Structured Finance</span>
                                    </div><hr><br>
                                    <div>
                                      <ul class='contact'>
                                          <li>Rajat was most recently head of capital markets for North India at Standard Chartered Bank and was responsible for origination and execution of domestic and international transactions across all capital market products, viz. bonds, loans, convertibles, linked derivatives and structured products. He was responsible for setting up the Delhi unit, which executed close to fifty small and large transactions in this period with the highlights being a $600 million acquisition finance deal for a Tech company,, a $100 million offshore FCCB backed promoter financing transaction for an auto ancilliary, SPV based corporate Put Option transactions, a large share backed promoter financing and a series of debt FII transactions.<br><br></li>
                                          <li>Before heading the capital markets practice, Rajat started the ABS desk for SCB in Mumbai in 2003 and led the bank to a market leadership position in the product. He later led the origination and execution for South Asia and Middle East, where he worked in conjunction with the local DCM team to successfully originate a number of ABS, MBS and CMBS mandates in UAE, Saudi Arabia, Oman, Sri Lanka and Bangladesh. These were mandates for first time transactions out of these countries so involved very detailed study of the legal, regulatory, accounting, taxation and in some cases the Shariah law aspects.<br><br></li>
                                          <li>Previously, Rajat has worked as Head of Structured Finance at ICRA and a stint in the Mutual Fund industry.</li>
                                      </ul>
                                    </div>
				</div>
				
				<div id='people4' style='display:none'>
                                    <div style='font-size:16px; margin:0 0 10px 0'>
                                        <b>Dilshan Hettiaratchi</b><br>
                                        <span style='font-size:13px; color:#aaaaaa'>Managing Director</span>
                                    </div><hr><br>
                                    <div>
                                        <ul class='contact'>
                                            <li>Dilshan has over 20 years of Banking experience.  Prior to joining Faber Capital, he was the Managing Director and Head of Debt Capital Markets – MENA and Pakistan for Standard Chartered Bank, based in Dubai.  He helped build SCB’s ME Debt Capital Markets franchise which was regularly within the top three arrangers on the both the GCC International Bond and Sukuk league for a number of years.<br><br></li>
                                            <li>Dilshan has helped issuers raise over USD 70 billion through the Bond and Sukuk markets. During his tenor as the Head of DCM for SCB, he assisted a number of issuers including The Government of Dubai, The Government of Ras Al Khaimah, International Petroleum Investment Company, Tourism Development Investment Company, Emaar Properties, Majid Al Futtaim, Abu Dhabi Commercial Bank, First Gulf Bank, Emirates NBD, Tamweel, Emirates Airlines, Dubai Electricity and Water Authority, Jebel Ali Free Zone Authority,  etc , access the Debt Capital Markets.<br><br></li>
                                            <li>He was also a Steering Committee member of the Gulf Bond and Sukuk Association (GBSA), and the Chair of the Government Bond issuance committee in 2011. He has been a speaker/panelist at a number of industry conferences in Debt Markets over the last few years.<br><br></li>
                                            <li>Prior to joining SCB, he worked with Citi National Investment Bank, which was the investment banking arm of Citibank based in Colombo.</li>
                                        </ul>
                                    </div>
				</div>
				
				<div id='people5' style='display:none'>
                                    <div style='font-size:16px; margin:0 0 10px 0'>
                                        <b>Rupesh Hindocha</b><br>
                                        <span style='font-size:13px; color:#aaaaaa'>Managing Director</span>
                                    </div><hr><br>
                                    <div>
                                        <ul class='contact'>
                                            <li>Rupesh has over 18 years of banking experience. Prior to joining Faber Capital, he was head of credit trading for Middle East, Africa, Turkey and Pakistan for Standard Chartered Bank, based in Dubai. He helped build SCB’s MENA credit trading franchise into a top three player within the industry.<br><br></li>
                                            <li>Rupesh has traded credit markets in Latin America, Eastern Europe, Middle East, Pakistan, Africa and Turkey. His client base is global with key contacts in Europe, US, Middle East and Asia.<br><br></li>
                                            <li>Prior to joining SCB, he worked for Credit Suisse in Dubai and London and earlier for Barclays Capital in London.</li>
                                        </ul>
                                    </div>
				</div>
				
				<!--<div id='people6' style='display:none'>
                                    <div style='font-size:16px; margin:0 0 10px 0'>
                                        <b>Nadia Zubairi</b><br>
                                        <span style='font-size:13px; color:#aaaaaa'>Associate Director</span>
                                    </div><hr><br>
                                    <div>
                                        <ul class='contact'>
                                            <li>Nadia has over 8 years of experience in banking and finance. She has worked across various functions including credit, corporate and investment banking.<br><br></li>
                                            <li>Prior to joining Faber, Nadia was part of the SCB Capital Markets team for GCC and Pakistan and has substantial experience in origination and execution of both conventional and Islamic capital market instruments accessing international and regional investors. She has worked with leading issuers across a number of industries including real estate, finance and manufacturing.<br><br></li>
                                            <li>Prior to SCB, Nadia has worked as an energy specialist for ABN AMRO and has a strong foundation in credit analysis.</li>
                                        </ul>
                                    </div>
				</div>-->
				
				<div id='people7' style='display:none'>
                                    <div style='font-size:16px; margin:0 0 10px 0'>
                                        <b>Shyam Shirke</b><br>
                                        <span style='font-size:13px; color:#aaaaaa'>Director</span>
                                    </div><hr><br>
                                    <div>
                                        <ul class='contact'>
                                            <li>Shyam has extensive experience in Debt Capital Markets particularly in the Infrastructure and the Real Estate sector with an expertise across infrastructure verticals viz. Power (Renewable and Non – Renewable), Transportation and Urban Infrastructure.<br><br></li>
                                            <li>He has successfully achieved financial closures (Debt & Equity) of several marquee transactions in the infrastructure sector worth US$ 1.1 Bn including an equity fund raising for one of the largest Infrastructure Groups’ in India through the IPO / QIP route</li>
                                        </ul>
                                    </div>
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

</body>
</html>