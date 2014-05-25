<html>
<meta charset="utf-8" />
<head>
	<title>首頁</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=0" /> 
	<link rel=stylesheet type="text/css" href="../css/fixbar.css">
	<link rel=stylesheet type="text/css" href="css/roll.css" >
	<link rel=stylesheet type="text/css" href="css/star.css">

	
</head>

<body style="overflow-x: hidden;background-image:url(../img/bgcolor.png); ">
	<div class="navbar navbar-fixed-top" id='headerlink'>
			<div class="navbar-inner" >
				<div class='fixbarleft' id='fixbarleft'><img src='../img/fixbar_left.png'></div>
				<div class="navcontainer" >
					<?php include('../zhen/login_success.php')?>
					<ul class="nav searchbox">
						<li><input type="text"  placeholder="搜尋" style="font-color:#a1a1a1"></li>
					</ul> 
					<ul class="nav button">
						<li><a href="../jsstl-master/index.html""><img src="../img/print.png"></a></li>
						<li><a href="../displayPlatform/index.html"><img src="../img/platform.png"></a></li>
						<li><a href="../zhen/forum/forum_index.php"><img src="../img/forum.png"></a></li>
					</ul>
					<span class="logo"><a href="../index.php"><img src="../img/print_img/choose.png"></a></span>
					<span class="nav uploadbutton" ><a href="../showMode/file_upload.html"><img src="../img/upload.png"></a></span>
				</div>
				<div class='fixbarright' id='fixbarright'><img src='../img/fixbar_right.png'></div>
			</div>
		</div>
	<div id = "Fold">	
		<input type="button" onclick="foldIn()" value="in"/>
		<input type="button" onclick="foldOut()" value="out"/>
	</div>
	<div class="scroll" ><!--設個邊邊吧~-->
	<section class="container">
			<div id="carousel">
				
			</div>
			
		<section id="options">
			<p id="navigation">
				<div id="next"><a  onclick="onNavButtonClick(1); " ><img src="img/next.png"  width="50" height="50"/> </a></div>
				<div id="previous"><a  onclick="onNavButtonClick(-1); " ><img src="img/previous.png"  width="50" height="50"/> </a></div>
			</p>
		</section>
		
	</section>
	<div id="viewer3D">
	</div>
	
	</div>
	<div id="info"  class="infoHoverOut"> 
		<div id="starRating">
			<img src="img/star.png" alt="1" >
			<img src="img/star.png" alt="2" >
			<img src="img/star.png" alt="3" >
			<img src="img/star.png" alt="4" >
			<img src="img/star.png" alt="5" >
		</div>
		<div id = "starStat"></div>
		<div id="parts">
			<img src="img/pic1.jpg"  />
			<img src="img/pic2.jpg"  />
			<img src="img/pic3.jpg"  />
			<img src="img/pic4.jpg"  />
			<img src="img/pic1.jpg"  />
			<img src="img/pic2.jpg"  />
			<img src="img/pic3.jpg"  />
			<img src="img/pic4.jpg"  />
			<img src="img/pic1.jpg"  />
			<img src="img/pic2.jpg"  />
			<img src="img/pic3.jpg"  />
			<img src="img/pic4.jpg"  />
		</div>
		<div id="extendParts1"> <input type="button" value="Drop"/></div>
		<div id="extendParts2"> <input type="button" value="back"/></div>
	</div>

<script type="text/javascript" src="js/utils.js"></script>
<script src="js/three.js"></script>
<script src="js/stats.js"></script>
<script src="js/detector.js"></script>
<script type="text/javascript" src="js/stlviewer2.js"></script>
<script type="text/javascript" src="js/roll.js"></script>

<script type="text/javascript">
	document.getElementById("fixbarleft").style.width = (window.innerWidth  - 940)/2;
	document.getElementById("fixbarright").style.width = (window.innerWidth  - 940)/2;
</script>
	
</body>
</html>
