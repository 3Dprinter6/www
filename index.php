<html>
<meta charset="utf-8" />
<head>
	<title>首頁</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=0" /> 
	
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1200px) and (max-width: 1299px)" href="css/fixbar1280x1024.css" >
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1300px) and (max-width: 1899px)" href="css/fixbar1366x768.css" >
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1900px)" href="css/fixbar1920x1080.css" >
	
	<link rel=stylesheet type="text/css" href="css/roll.css" >
	
	<script type="text/javascript">
		var timer1;
		function autoScroll(){
			timer1 = setTimeout("autoScroll()", 3000);
			onNavButtonClick(1,-1); 
		}
	</script>
</head>

<body style="overflow-x: hidden;">
	
		<div class="navbar navbar-fixed-top" >
		  <div class="navbar-inner" >
		  <span class="brand" href="#" ></span>
			<div class="navcontainer" >
				<?php include('zhen/login_success.php')?>
				<ul class="nav searchbox">
					<li><input type="text"  placeholder="搜尋" style="font-color:#a1a1a1"></li>
				</ul> 
				<ul class="nav button">
					<li><a href=""><img src="img/print.png"></a></li>
					<li><a href=""><img src="img/platform.png"></a></li>
					<li><a href=""><img src="img/forum.png"></a></li>
				</ul>
				<span class="nav uploadbutton" href=".."><img src="img/upload.png"></span>
			</div>
		  </div>
		</div>
	<div>
		<img src="img/bg.png" width=100% style="float:left;">
		<div class="scroll" ><!--設個邊邊吧~-->
		<section class="container">
				<div id="carousel">
					<figure id="figure0" class="opa" style="-webkit-transform:translateX(-1700px) ;-webkit-filter: grayscale(1);  -webkit-transition: all 1s;" ><img src="img/pic1.jpg"  width="180" height="240" alt=""><span id="imageInfo0" style='opacity:0;'></span></figure>
					<figure id="figure1" class="opa" style="-webkit-transform:translateX(-1400px) ;-webkit-filter: grayscale(1); -webkit-transition: all  1s;" ><img src="img/pic2.jpg"  width="180" height="240" alt=""><span id="imageInfo1" style='opacity:0;'></span></figure>
					<figure id="figure2" class="opa" style="-webkit-transform:translateX(-1100px) ;-webkit-filter: grayscale(1);  -webkit-transition: all 1s;"><img src="img/pic3.jpg"  width="180" height="240" alt=""><span id="imageInfo2" style='opacity:0;'></span></figure>
					<figure id="figure3" class="opa" style="-webkit-transform:translateX(-800px) ;-webkit-filter: grayscale(1);  -webkit-transition: all 1s;"><img src="img/pic4.jpg"  width="180" height="240" alt=""><span id="imageInfo3" style='opacity:0;'></span></figure>
					<figure id="figure4" class="opa" style="-webkit-transform:translateX(-500px) ;-webkit-filter: grayscale(1);  -webkit-transition: all 1s;"><img src="img/pic5.jpg"  width="180" height="240" alt=""><span id="imageInfo4" style='opacity:0;'></span></figure>	
					<figure id="figure5"  class="middleopa" style="-webkit-transform:translateX(-200px) rotateY( -45deg ) translateZ( 100px );-webkit-filter: grayscale(1); -webkit-transition: all  1s;"><img src="img/pic6.jpg"  width="180" height="240" alt=""><span id="imageInfo5" style='opacity:0;'></span></figure>
					<figure id="figure6"  class="nonopa" style="-webkit-transform: rotateY(0deg) translateZ( 200px );  -webkit-filter: grayscale(0); -webkit-transition: all  1s;"><img src="img/pic7.jpg"  width="180" height="240" alt=""><span id="imageInfo6" style='opacity:0.8;'>Figure6</span></figure>
					<figure id="figure7" class="middleopa"  style="-webkit-transform: translateX(200px) rotateY(45deg)  translateZ(100px);-webkit-filter: grayscale(1); -webkit-transition: all  1s;"><img src="img/pic8.jpg"  width="180" height="240" alt=""><span id="imageInfo7" style='opacity:0;'></span></figure>
					<figure id="figure8" class="opa"  style="-webkit-transform:translateX(500px);-webkit-filter: grayscale(1); -webkit-transition: all  1s;"><img src="img/emily.jpg"  width="180" height="240" alt=""><span id="imageInfo8" style='opacity:0;'></span></figure>
					<figure id="figure9" class="opa"  style="-webkit-transform:translateX(800px);-webkit-filter: grayscale(1); -webkit-transition:all 1s;"><img src="img/pic1.jpg"  width="180" height="240" alt=""><span id="imageInfo9" style='opacity:0;'></span></figure>
					<figure id="figure10" class="opa"  style="-webkit-transform:translateX(1100px);-webkit-filter: grayscale(1); -webkit-transition: all  1s;"><img src="img/pic3.jpg"  width="180" height="240" alt=""><span id="imageInfo10" style='opacity:0;'></span></figure>
					<figure id="figure11" class="opa"  style="-webkit-transform:translateX(1400px);-webkit-filter: grayscale(1); -webkit-transition: all  1s;"><img src="img/pic4.jpg"  width="180" height="240" alt=""><span id="imageInfo11" style='opacity:0;'></span></figure>
					<figure id="figure12" class="opa"  style="-webkit-transform:translateX(1700px);-webkit-filter: grayscale(1); -webkit-transition:all 1s;"><img src="img/pic5.jpg"  width="180" height="240" alt=""><span id="imageInfo12" style='opacity:0;'></span></figure>
				</div>
			<section id="options">
				<p id="navigation">
					<div id="next"><a  onclick="onNavButtonClick(1,1); " ><img src="img/next.png"  width="50" height="50"/> </a></div>
					<div id="previous"><a  onclick="onNavButtonClick(-1,1); " ><img src="img/previous.png"  width="50" height="50"/> </a></div>
				</p>
			</section>
		</section>
		</div>
	</div>
<script type="text/javascript" src="js/utils.js"></script>

 <script type="text/javascript" src="js/roll.js"></script>
<script type="text/javascript">
		autoScroll();
</script>
</body>
</html>
