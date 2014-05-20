<html>
<meta charset="utf-8" />
<head>
	<title>首頁</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=0" /> 
	<link rel=stylesheet type="text/css" href="css/fixbar.css">
	<link rel=stylesheet type="text/css" href="css/roll.css" >
	<style type="text/css">
		.scroll{height:65%}
		.bottom{margin:200px 20px 0 20px}
		
		.bottom_button{

			width:70%;
			margin-right:auto;
			margin-left:auto;
			-webkit-padding-start:0px;
			text-align:center;
			
		}
		.bottom_button>a>img {
			display:inline;
			margin:0px;
		}

	
	</style>
	
</head>

<body style="overflow-x: hidden;background-image:url(/img/bg.png); ">
	<div class="navbar navbar-fixed-top" >
      <div class="navbar-inner" >
	  <span class="brand" href="#" ><img src="./img/3D-ink_transparent.png"></img></span>
        <div class="navcontainer" >
			<ul class="nav searchbox">
				<li><input type="text"  placeholder="搜尋"></li>
			</ul>  
	    </div>
      </div>
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

	
	</div>
	<div id="info"  class="infoHoverOut"> 
	
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
		<div id="extendParts1"> <input type="button" onclick="partsExtend(1)" value="Drop"/></div>
		<div id="extendParts2"> <input type="button" onclick="partsExtend(-1)" value="back"/></div>
	</div>
<script type="text/javascript" src="js/utils.js"></script>

 <script type="text/javascript" src="js/roll.js"></script>
	
</body>
</html>
