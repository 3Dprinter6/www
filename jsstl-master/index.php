<!doctype html>
<html lang="en">
    <head>
        <title>stl viewer</title>
        <meta charset="utf-8">

		<meta name="viewport" content="initial-scale=1.0, user-scalable=0" />
		<link rel="stylesheet" type="text/css" href="../css/fixbar.css" >
        <style>

            #modelDisplay{
                position:absolute;
                margin-top:-150px;
                margin-left:-200px;
                -webkit-transition:all 2s;
				opacity:0;
                }
            #dragArea{
                position:absolute;
                margin-left:0;
                margin-top:0;
				border-style:dashed;
				border-color:#23D5D7;
				background-color:#000000;
				opacity:.3;
				
				width:450px;
				height:450px;
				-webkit-border-top-left-radius:5px;
				-webkit-border-top-right-radius:5px;
				-webkit-border-bottom-left-radius:5px;
				-webkit-border-bottom-right-radius:5px;
				-webkit-transition:all 1s;
            }
			#progress{
				position:absolute;
				margin-top:0px;
				margin-left:0px;
				width:300px;
				background:#00F7FA;
				-webkit-border-top-left-radius:5px;
				-webkit-border-top-right-radius:5px;
				-webkit-border-bottom-left-radius:5px;
				-webkit-border-bottom-right-radius:5px;
				
			}
			#form{
				
				position:absolute;
                margin-left:420px;
				padding: 20px;
				width: 400px;
				height:400px;
				color:#999999;
				font-family:Microsoft JhengHei;
				font-size:17px;
				border-style:solid;
				border-width : 0px;
				-webkit-border-radius: 5px;

				opacity:0;
			}
			
			.printform{
				color:#999999;
			}
			.printformul{
				list-style:none;
				font-family:Microsoft JhengHei;
				-webkit-border-radius:5px;
				border-width : 1px;
				outline:none;
			}
			
			.printformul>li>input{
				font-family:Microsoft JhengHei;
				-webkit-border-radius:5px;
				background-color:transparent;
				color:#999999;
				outline:none;
				font-size:13px;
			}
			
			.formbutton{
				list-style:none;
			}
			
			.formbutton>li{
				display:inline;
				
			}
			.formbutton>li>input{
				
				
			}
			.previewframe{
				
				background-image:url('../../img/printframe.png');
				background-size:100% 100%;
				width:730px;
				height:530px;
				margin-top:10%;
				margin-right:auto;
				margin-left:auto;
				padding: 10px;
			}
			
			
			
		</style>


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
		<div class='previewframe'>
			
			<div id = "modelDisplay"></div>
			<div id = "form">
				<form action='print_fillin' method='POST' class='printform'>
					<ul class='printformul'>
						<li>作品名稱： <input type="text" name="name" />
						<li>列印密度： <input type="text" name="name"  maxlength="5" />&nbsp%</li>
						
					</ul>
					<ul class='formbutton'>
						<li><input type="submit" value='送出'></li>
						<li><a href='index.html'><input type="button" value="取消"></a></li>
					</ul>
				</form>
			</div>
			
			<script src="three.js"></script>
			<script src="stats.js"></script>
			<script src="detector.js"></script>
			<script src="stlviewer.js"></script>
			
			<?php if (empty($_GET['path'])){
							echo "<div id='dragArea'>
									<div id = 'progress'></div>
									</div>
									<script>window.addEventListener('DOMContentLoaded', dragInit , false);</script>";
						}else{ 
							echo "<div id='dragArea' style='display:none;'></div><script>(function(){geoInit('".$_GET['path']."');})(); </script>";
						}
			?>
		</div>
		
		<script type="text/javascript">
			document.getElementById("fixbarleft").style.width = ((window.innerWidth  - 940)/2).toString() + "px" ;
			document.getElementById("fixbarright").style.width = ((window.innerWidth  - 940)/2).toString() + "px";
		</script>
		
    </body>
</html>
