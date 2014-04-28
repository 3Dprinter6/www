var count=0;     //first image
var form=-1;
var arr=new Array();

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

var dist = 1;  // leftest img 's  distance to leftleft img

function $(id){
	return document.getElementById(id);
}


(function init () {
	for (var i = 0 ; i < arr.length ; i++){
		temp = $("figure"+i);
		temp.style.webkitTransform = arr[i];
		temp.style.webkitTransition = "all 1s";
		if (i==(count+dist+2)%arr.length){
					var span=$('imageInfo'+i);
					span.style.opacity='0.8';
					span.innerHTML="figure"+i;
					temp.style['-webkit-filter']="grayscale(0)";
					temp.className='nonopa';
					var text = document.createElement("div");
					text.innerHTML="<h1>Figure"+i+"</h1><p>Lorem ipsum dolor sit amet, duo quando eruditi ei, te enim dolore sed. Putant euripidis  nam, pri vocibus mnesarchum definitionem ea. Duo aliquam electram ad, ius eu audire copiosae tincidunt. Minimum tractatos rationibus duo , eu est eius rebum nominavi. Ex omnis erant quando pro. Ex magna ignota erroribus nec, propriae elaboraret est ea.";
					$("info").appendChild(text);
					temp.setAttribute("onclick","infoDrop()");
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
})();


function onNavButtonClick(increment){
			panelCount = $('carousel').children.length;
			initCalculate(panelCount);
			if (increment == 1){
				next(panelCount);
			}
			else if (increment == -1){
				previous(panelCount);
			}
    }
	


function initCalculate(panelCount){
	if (count>=0)	
		count=count%panelCount;	
	else if (count<0)
		count=panelCount-(Math.abs(count)%panelCount);   //count==-1 || -12|| -23 represent figure10
}


function next(panelCount){
			var ram;                 //save figure 10 in the beginning due to the for loop start from figure 10, its first coordinate must be record so that figure 0 know where to follow

			for (var i=(panelCount-1);i>=0;i--){ 
				var temp=eval("figure"+i);
				
/* ----------- The middle image opacity ----------- */				
				if (i==(count+dist+3)%panelCount){
					var span=$('imageInfo'+i);
					span.style.opacity='0.8';
					span.innerHTML="figure"+i;
					temp.style['-webkit-filter']="grayscale(0)";
					temp.className='nonopa';
					
					$("info").removeChild($("info").lastChild);
					var text = document.createElement("div");
					text.innerHTML="<h1>Figure"+i+"</h1><p>Lorem ipsum dolor sit amet, duo quando eruditi ei, te enim dolore sed. Putant euripidis  nam, pri vocibus mnesarchum definitionem ea. Duo aliquam electram ad, ius eu audire copiosae tincidunt. Minimum tractatos rationibus duo , eu est eius rebum nominavi. Ex omnis erant quando pro. Ex magna ignota erroribus nec, propriae elaboraret est ea.";
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





function previous(panelCount){
			var ram;                                     //save figure 0 in the beginning due to the for loop start from figure 0, its first coordinate must be record so that figure 10 know where to follow
			var temp;
			for (var i=0;i<panelCount;i++){ 
				temp=eval("figure"+i);		

/* ----------- The middle image opacity ----------- */	
			if (i == (count+dist+1)%panelCount){
					var span=$('imageInfo'+i);
					span.style.opacity='0.8';
					span.innerHTML="figure"+i;
					temp.className='nonopa';
					temp.style['-webkit-filter']="grayscale(0)";		
					
					$("info").removeChild($("info").lastChild);
					var text = document.createElement("div");
					text.innerHTML="<h1>Figure"+i+"</h1><p>Lorem ipsum dolor sit amet, duo quando eruditi ei, te enim dolore sed. Putant euripidis  nam, pri vocibus mnesarchum definitionem ea. Duo aliquam electram ad, ius eu audire copiosae tincidunt. Minimum tractatos rationibus duo , eu est eius rebum nominavi. Ex omnis erant quando pro. Ex magna ignota erroribus nec, propriae elaboraret est ea.";
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
	temp = $("info");
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
	temp=$("parts");
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
		