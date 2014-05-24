var count=0;     //first image
var form=-1;
var arr=new Array();
var noArr = new Array();
var nameArr = new Array();
var linkArr = new Array();
var infoArr = new Array();
var scoreArr = new Array();
var ratenumberArr = new Array();
var panelCount;
var currentIndex;
var averageScore;    //current averageScore
arr[0]="translateX(-900px) ";
arr[1]="translateX(-600px) ";
arr[2]="translateX(-250px) rotateY( -30deg ) translateZ( 100px )";
arr[3]="rotateY(0deg) translateZ( 200px )";
arr[4]="translateX(250px) rotateY( 30deg ) translateZ( 100px )";
arr[5]="translateX(600px) ";
arr[6]="translateX(900px) ";
arr[7]="translateX(1200px) ";
arr[8]="translateX(1500px) ";
arr[9]="translateX(1800px) ";



var child = $("starRating").getElementsByTagName("img");  //for rating

var dist = 1;  // leftest img 's  distance to leftleft img

function $(id){
	return document.getElementById(id);
}



function derate(e){
	//var averageScore = Math.round(scoreArr[currentIndex]/ratenumberArr[currentIndex]);
	for (var a =0 ; a<child.length ; a++){
		child[a].setAttribute("style","-webkit-filter:grayscale(100%)");
	}
	for (var a =0 ; a<averageScore ; a++){	
		child[a].setAttribute("style","-webkit-filter:grayscale(0%)");
	}
}


function prerate(e){
	for (var a =0 ; a<child.length ; a++){
		child[a].setAttribute("style","-webkit-filter:grayscale(100%)");
	}
	for (var a = 0 ; a<child.length ; a++){
		child[a].setAttribute("style","-webkit-filter:grayscale(0%)");
	if (child[a] == e.target )
		break;
	}
}


function ratingScore(e){
	var xhr = new XMLHttpRequest;
	var value;
	xhr.onreadystatechange = function(){
	//	if (xhr.readyState == 4)
	//		alert(xhr.responseText);
	};
	xhr.open("GET" , "rate.php?value="+e.target.alt+"&no="+noArr[currentIndex] , true);
	xhr.send(null);
}


function carouselBuilder(){
	for ( var i = 0 ; i <panelCount; i++){
		var figure = document.createElement("figure");
		figure.setAttribute("id","figure"+i);
		var img = document.createElement("img");
		img.src=linkArr[i];
		img.width=180;
		img.height=240;
		var span = document.createElement("span");
		span.setAttribute("id","imageInfo"+i);
		span.innerHTML = nameArr[i];
		figure.appendChild(img);
		figure.appendChild(span);
		$("carousel").appendChild(figure);
	}
}

function imageRequest(){
	var xhr = new XMLHttpRequest;
	xhr.onreadystatechange = function(){
		if (xhr.readyState == 4){
			var temp = xhr.responseText;
			var res = temp.split("_");
			for ( var i =0 ; i<res.length ; i++){
				if (i%6 == 0 )
					noArr.push(res[i]);
				else if ( i%6 == 1)
					nameArr.push(res[i]);
				else if (i%6 == 2)
					linkArr.push(res[i]);
				else if (i%6 == 3)
					infoArr.push(res[i]);
				else if (i%6 == 4)
					scoreArr.push(res[i]);
				else if (i%6 == 5)
					ratenumberArr.push(res[i]);
			}
		}
	}
	xhr.open("GET","./info.php",false);
	xhr.send(null);
}


function init () {
	imageRequest();
	panelCount=linkArr.length;
	carouselBuilder();
	


	for (var i = 0 ; i < panelCount ; i++){
		
		temp = $("figure"+i);
		temp.style.webkitTransform = arr[i];
		temp.style.webkitTransition = "all 1s";
		if (i==(count+dist+2)%arr.length){
					currentIndex = i;
					averageScore = Math.round(scoreArr[i]/ratenumberArr[i]);
					for (var j = 0 ; j < averageScore ; j++){
						child[j].setAttribute("style","-webkit-filter:grayscale(0%)");
					}
					$("starStat").innerHTML = "<h2>平均評價："+averageScore+"/5 分，共 "+ratenumberArr[i]+" 筆評價</h2>"
					
		
					var span=$('imageInfo'+i);
					span.style.opacity='0.8';
					span.innerHTML=nameArr[i];
					temp.style['-webkit-filter']="grayscale(0)";
					temp.className='nonopa';
					var text = document.createElement("div");
					text.innerHTML="<h1>作品名稱："+nameArr[i]+"<p> 作品介紹： "+infoArr[i]+"</p></h1>";
					$("info").appendChild(text);
					temp.setAttribute("onclick","infoDrop()");
					

					for (var j = 0 ; j<child.length ; j++){                                    //the rating system initializing
						child[j].addEventListener('mouseover',prerate, false);
						child[j].addEventListener('mouseout',derate, false);
						child[j].addEventListener('click',ratingScore, false);
				//		child[j].onmouseover= prerate;
				//		child[j].onmouseout= derate(i);                  //need i to regenerate average score
					//	child[j].onclick=ratingScore;
					}
					
					
					
				}
				else {
					
					var span=$('imageInfo'+i);
					span.style.opacity='0';
					temp.style['-webkit-filter']="grayscale(1)";
					temp.className='opa';
					if ((i==(count+dist+1)%arr.length) || (i==(count+dist+3)%arr.length )){
						temp.className='middleopa';
					}
				}
				
				
				
				
	}
	$("extendParts1").addEventListener("click" , partsExtend(1) , false);
	$("extendParts2").addEventListener("click" , partsExtend(-1) , false);
	
//	var stars = $("starRating").getElementsByTagName("div");
//	for (var i = (stars.length-1) ; i>=0 ; i--){
//		stars[i].onclick=function (){ratingScore(event)};
//	}
	
	
}


function onNavButtonClick(increment){
			initCalculate();
			if (increment == 1){
				//alert("hi");
				next();
			}
			else if (increment == -1){
				previous();
			}
    }
	


function initCalculate(){
	if (count>=0)	
		count=count%(panelCount);	
	else if (count<0)
		count=panelCount-(Math.abs(count)%panelCount);   //count==-1 || -12|| -23 represent figure10
}


function next(){
			var ram;                 //save figure 10 in the beginning due to the for loop start from figure 10, its first coordinate must be record so that figure 0 know where to follow

			for (var i=(panelCount-1);i>=0;i--){ 
				
				var temp=$("figure"+i);
				
/* ----------- The middle image opacity ----------- */				
				if (i==(count+dist+3)%panelCount){
					currentIndex = i;
					var starChild = $("starRating").getElementsByTagName("img");
					averageScore = Math.round(scoreArr[i]/ratenumberArr[i]);
					for (var j = 0 ; j<starChild.length ; j++){
						starChild[j].setAttribute("style","-webkit-filter:grayscale(100%)");    //reset all score first
					}
					
					for (var j = 0 ; j < averageScore ; j++){
						starChild[j].setAttribute("style","-webkit-filter:grayscale(0%)");
					}
					$("starStat").innerHTML = "<h2>平均評價："+averageScore+"/5 分，共 "+ratenumberArr[i]+" 筆評價</h2>"
				
					var span=$('imageInfo'+i);
					span.style.opacity='0.8';
					span.innerHTML=nameArr[i];
					temp.style['-webkit-filter']="grayscale(0)";
					temp.className='nonopa';
					
					$("info").removeChild($("info").lastChild);
					var text = document.createElement("div");
					text.innerHTML="<h1>作品名稱："+nameArr[i]+"<p>作品介紹： "+infoArr[i]+"</p></h1>";
				$("info").appendChild(text);
					temp.setAttribute("onclick","infoDrop()");
				}
				else {
					
					var span=$('imageInfo'+i);
					span.style.opacity='0';
					temp.style['-webkit-filter']="grayscale(1)";
					temp.className='opa';
					if ((i==(count+dist+2)%panelCount) || (i==(count+dist+4)%panelCount )){
						temp.className='middleopa';
						temp.setAttribute("onclick","null");
					}
				}
//--------------------------------------------------------------------------------------------------	
				
					
/* ----------- Disable the animation when the end transform to the front ----------- */
		
				if  (i == (count%panelCount)){
						temp.style.webkitTransition="all  0s";
				}
				if  (i == ((count+(panelCount-1))%panelCount)){
					temp.style.webkitTransition="all  1s";
				}
//--------------------------------------------------------------------------------------------------


/* ----------- In order to let figure 0 follow figure 10 correctly ----------- */
				if  (i==(panelCount-1))
					ram=arr[i];
				if  (i==0 ){				
					arr[i]=ram;
					temp.style.webkitTransform=ram;
					break;
				}
//--------------------------------------------------------------------------------------------------
				

				temp.style.webkitTransform= arr[i-1];
				arr[i]=arr[i-1];
			}
			count++;	          //the left pic figure number
		
}





function previous(){
			var ram;                                     //save figure 0 in the beginning due to the for loop start from figure 0, its first coordinate must be record so that figure 10 know where to follow
			var temp;
			for (var i=0;i<panelCount;i++){ 
				temp=$("figure"+i);		

/* ----------- The middle image opacity ----------- */	
			if (i == (count+dist+1)%panelCount){
					currentIndex = i;
					var starChild = $("starRating").getElementsByTagName("img");
					averageScore = Math.round(scoreArr[i]/ratenumberArr[i]);
					for (var j = 0 ; j<starChild.length ; j++){
						starChild[j].setAttribute("style","-webkit-filter:grayscale(100%)");    //reset all score first
					}
					
					for (var j = 0 ; j < averageScore ; j++){
						starChild[j].setAttribute("style","-webkit-filter:grayscale(0%)");
					}
					$("starStat").innerHTML = "<h2>平均評價："+averageScore+"/5 分，共 "+ratenumberArr[i]+" 筆評價</h2>"
			
			
					var span=$('imageInfo'+i);
					span.style.opacity='0.8';
					span.innerHTML=nameArr[i];
					temp.className='nonopa';
					temp.style['-webkit-filter']="grayscale(0)";		
					
					$("info").removeChild($("info").lastChild);
					var text = document.createElement("div");
					text.innerHTML="<h1>作品名稱："+nameArr[i]+"<p>作品介紹： "+infoArr[i]+"</p></h1>";
					$("info").appendChild(text);
					temp.setAttribute("onclick","infoDrop()");
			}else{ 
				var span=$('imageInfo'+i);
				span.style.opacity='0';
				temp.className='opa';
				temp.style['-webkit-filter']="grayscale(1)";
				
				if  (i==(count+dist)%panelCount || i == (count+dist+2)%panelCount){
						temp.className='middleopa';
						temp.setAttribute("onclick","null");
					}

			}
//--------------------------------------------------------------------------------------------------	

			
/* ----------- Disable the animation when the front transform to the end ----------- */		
				if  (i==((count+(panelCount-1))%panelCount))
					temp.style.webkitTransition="all  0s";

				if  (i==(count%panelCount)){
						temp.style.webkitTransition="all  1s";
					}
						
//--------------------------------------------------------------------------------------------------	

/* ----------- In order to let figure 10 follow figure 0 correctly ----------- */	
				if  (i==0)
					ram=arr[i];
				if  (i==(panelCount-1) ){	
					arr[i]=ram;
					temp.style.webkitTransform=ram;
					break;
				}
//--------------------------------------------------------------------------------------------------
				
				temp.style.webkitTransform = arr[i+1];
				arr[i]=arr[i+1];
			}
			count--;		
}

function infoDrop(){
	var temp = $("info");
	form = form * (-1);
	if  (form == 1){
	//	temp.style.display="inline";
		temp.className="infoHover";
	}
	else if (form == -1){
		temp.className="infoHoverOut";
	//	setTimeout(function(){ temp.style.display="none"},500);
	}
}


function partsExtend(flag){
	var temp=$("parts");
	if (flag == 1){
		temp.style.display="inline"
		setTimeout(function(){ 
		temp.style.webkitTransform = "translateY(200px)";
		temp.style.opacity=".8";},1);
	}else{ 
		temp.style.webkitTransform = "translateY(-200px)";
		temp.style.opacity="0";
		setTimeout(function(){temp.style.display="none"} ,500);
	}
}

window.addEventListener("DOMContentLoaded", init() ,false);
		