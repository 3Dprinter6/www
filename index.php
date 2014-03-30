<html>
<meta charset="utf-8" />
<head>
	<title>首頁</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=0" /> 
	<link rel=stylesheet type="text/css" href="css/fixbar.css">
	<link rel=stylesheet type="text/css" href="css/roll.css" >
	<style type="text/css">
		.scroll{height:65%}
		.buttom{height:px}
		.buttom_button{list-style:none;position:absolute; top: 500px; right:200px; -webkit-padding-start:0px;}
		.buttom_button>li{display:inline;margin:20px;}
		.buttom_button>li>a{text-decoration: none}
		
	</style>
</head>

<body style="overflow-x: hidden;">
	<div class="navbar navbar-fixed-top" >
      <div class="navbar-inner" >
        <div class="navcontainer" >
		<ul class="nav">
            <li><a><input type="text"></a></li>
            <li><a href="">搜尋</a></li>
          </ul>
		  <span class="brand" href="#" >Logo</span>
		  <?php include('./zhen/login_success.php')?>
        </div>
      </div>
    </div>
	<div class="scroll" >
	<section class="container">
			<div id="carousel">
				<figure id="figure0" class="opa" style="-webkit-transform:translateX(-600px) ;-webkit-filter: grayscale(1);  -webkit-transition: all 1s;" ><img src="img/pic1.jpg"  width="180" height="240" alt=""><span id="imageInfo0" style='opacity:0;'></span></figure>
				<figure id="figure1" class="opa" style="-webkit-transform:translateX(-400px) ;-webkit-filter: grayscale(1); -webkit-transition: all  1s;" ><img src="img/pic2.jpg"  width="180" height="240" alt=""><span id="imageInfo1" style='opacity:0;'></span></figure>
				<figure id="figure2" class="middleopa" style="-webkit-transform: translateX(-80px) rotateY(-45deg)  translateZ(150px);-webkit-filter: grayscale(1); -webkit-transition: all  1s;"><img src="img/pic3.jpg"  width="180" height="240" alt=""><span id="imageInfo2" style='opacity:0;'></span></figure>
				<figure id="figure3" class="nonopa" style="-webkit-transform: rotateY(0deg)   translateZ(200px);-webkit-filter: grayscale(0); -webkit-transition: all  1s;"><img src="img/pic4.jpg"  width="180" height="240" alt=""><span id="imageInfo3" style='opacity:.8;'>figure3</span></figure>
				<figure id="figure4" class="middleopa" style="-webkit-transform: translateX(80px)  rotateY(45deg)  translateZ(150px);-webkit-filter: grayscale(1); -webkit-transition: all  1s;"><img src="img/pic5.jpg"  width="180" height="240" alt=""><span id="imageInfo4" style='opacity:0;'></span></figure>	
				<figure id="figure5"  class="opa" style="-webkit-transform:translateX(400px);-webkit-filter: grayscale(1); -webkit-transition: all  1s;"><img src="img/pic6.jpg"  width="180" height="240" alt=""><span id="imageInfo5" style='opacity:0;'></span></figure>
				<figure id="figure6"  class="opa" style="-webkit-transform:translateX(600px);-webkit-filter: grayscale(1); -webkit-transition: all  1s;"><img src="img/pic7.jpg"  width="180" height="240" alt=""><span id="imageInfo6" style='opacity:0;'></span></figure>
				<figure id="figure7" class="opa"  style="-webkit-transform:translateX(800px);-webkit-filter: grayscale(1); -webkit-transition: all  1s;"><img src="img/pic8.jpg"  width="180" height="240" alt=""><span id="imageInfo7" style='opacity:0;'></span></figure>
				<figure id="figure8" class="opa"  style="-webkit-transform:translateX(1000px);-webkit-filter: grayscale(1); -webkit-transition: all  1s;"><img src="img/emily.jpg"  width="180" height="240" alt=""><span id="imageInfo8" style='opacity:0;'></span></figure>
				<figure id="figure9" class="opa"  style="-webkit-transform:translateX(1200px);-webkit-filter: grayscale(1); -webkit-transition:all 1s;"><img src="img/pic1.jpg"  width="180" height="240" alt=""><span id="imageInfo9" style='opacity:0;'></span></figure>
				<figure id="figure10" class="opa"  style="-webkit-transform:translateX(1400px);-webkit-filter: grayscale(1); -webkit-transition: all  1s;"><img src="img/pic3.jpg"  width="180" height="240" alt=""><span id="imageInfo10" style='opacity:0;'></span></figure>
				<figure id="figure11" class="opa"  style="-webkit-transform:translateX(1600px);-webkit-filter: grayscale(1); -webkit-transition: all  1s;"><img src="img/pic4.jpg"  width="180" height="240" alt=""><span id="imageInfo11" style='opacity:0;'></span></figure>
				<figure id="figure12" class="opa"  style="-webkit-transform:translateX(1800px);-webkit-filter: grayscale(1); -webkit-transition:all 1s;"><img src="img/pic5.jpg"  width="180" height="240" alt=""><span id="imageInfo12" style='opacity:0;'></span></figure>
			</div>
	</section>

	  <section id="options">
		<p id="navigation">
		  <button id="previous" data-increment="-1">Previous</button>
		  <button id="next" data-increment="1">Next</button>
		</p>
	  </section>
	
	</div>
	<div class="buttom">
	
	<hr>
		<ul class="buttom_button">		
			<li><a href="platform/platform.html"><img src="img/button1.jpg" width="150" height="150"></a></li>
			<li><a href="forum.html"><img src="img/button2.jpg" width="150" height="150" /></a></li>
			<li><a href="upload.html"><img src="img/button3.jpg" width="150" height="150"></a></li>	
		</ul>
	</div>
<script type="text/javascript" src="js/utils.js"></script>

 <script type="text/javascript" src="js/roll.js"></script>
	
</body>
</html>
