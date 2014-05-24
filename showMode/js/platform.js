var count=2;     //default preload left image
var arr=new Array();
arr[0]="translateX(-600px) ";
arr[1]="translateX(-400px) ";
arr[2]="translateX(-80px) rotateY(-45deg)  translateZ(150px)";
arr[3]="rotateY(0deg)   translateZ(200px)";
arr[4]="translateX(80px)  rotateY(45deg)  translateZ(150px)";
for (var i=5;i<13;i++){                                                  //the maximum of i = panelCount
	arr[i]="translateX("+(400+200*(i-5))+"px)";
}
function $(id){
	return document.getElementById(id);
}
var rollinit = function() {
    var carousel = document.getElementById('carousel'),
        navButtons = document.querySelectorAll('#navigation button'),
        panelCount = carousel.children.length,
        transformProp = Modernizr.prefixed('transform'),
		transitionProp = Modernizr.prefixed('transition'),
		onNavButtonClick = function( event ){
        var increment = parseInt( event.target.getAttribute('data-increment') );
		initCalculate(panelCount);
		if  (increment==1)
			next(panelCount,transformProp,transitionProp);
		else 
			previous(panelCount,transformProp,transitionProp);
		};
		for (var i=0;i<panelCount;i++){                                                                    //initializing
			$("figure"+i).style[transformProp ]=arr[i];
			$("figure"+i).style[transitionProp]="all  1s";
			$("figure"+i).style['-webkit-filter']="grayscale(1)";
			$("imageInfo"+i).style['opacity']=0;
			if  (i==(count+1)){
				var s = document.createElement("div");
				s.setAttribute("id", "extendInfo")
				$("figure"+i).appendChild(s);
				
				$("figure"+i).style['-webkit-filter']="grayscale(0)";
				$("imageInfo"+i).style['opacity']=1;
			}
		}
		for (var i=0; i < 2; i++) {
		navButtons[i].addEventListener( 'click', onNavButtonClick, false);
		}
}

function initCalculate(panelCount){
	if (count>=0)	
		count=count%panelCount;	
	else if (count<0)
		count=panelCount-(Math.abs(count)%panelCount);   //count==-1 || -12|| -23 represent figure10
}


function next(panelCount,transformProp,transitionProp){
			
		
			var ram;                                   //save figure 10 in the beginning due to the for loop start from figure 10, its first coordinate must be record so that figure 0 know where to follow
			var temp;
			var ram2;
			for (var i=(panelCount-1);i>=0;i--){ 
				temp=eval("figure"+i);
				
/* ----------- The middle image opacity ----------- */				
				if (i==(count+2)%panelCount){
					var s = document.getElementById("extendInfo");
			//		alert(s);
			//		console.log("figure"+(i-1));
					if ((i-1)<0)
						$("figure"+(panelCount-1)).removeChild(s);   
					else
						$("figure"+(i-1)).removeChild(s);     
					$("figure"+i).appendChild(s);                                       //*****************************************************************************debug***********************
					
					var span=document.getElementById('imageInfo'+i);
					span.style.opacity='1';
					span.innerHTML="figure"+i;
					temp.style['-webkit-filter']="grayscale(0)";
					temp.className='nonopa';
					}
				else {
					
					var span=document.getElementById('imageInfo'+i);
					span.style.opacity='0';
					temp.style['-webkit-filter']="grayscale(1)";
					temp.className='opa';
					if ((i==(count+3)%panelCount) || (i==(count+1)%panelCount )){
						temp.className='middleopa';
					}
				}
//--------------------------------------------------------------------------------------------------	
				
					
/* ----------- Disable the animation when the end transform to the front ----------- */
		
				if  (i==(Math.abs(count-2)%panelCount)){
					if (count==0 || count==1)
						eval("figure"+(panelCount-(2-count))).style[transitionProp ]="all  0s";
					else
						temp.style[transitionProp ]="all  0s";
				}
				if  (i==((count+(panelCount-3))%panelCount)){
					temp.style[transitionProp ]="all  1s";
				}
//--------------------------------------------------------------------------------------------------


/* ----------- In order to let figure 0 follow figure 10 correctly ----------- */
				if  (i==(panelCount-1))
					ram=arr[i];
				if  (i==0 ){				
					arr[i]=ram;
					temp.style[transformProp ]=ram;
					break;
				}
//--------------------------------------------------------------------------------------------------
				

				temp.style[ transformProp ] = arr[i-1];
				arr[i]=arr[i-1];
			}
			count++;	          //the left pic figure number
		
}





function previous(panelCount,transformProp,transitionProp){
		
			var ram;                                     //save figure 0 in the beginning due to the for loop start from figure 0, its first coordinate must be record so that figure 10 know where to follow
			var temp;
			for (var i=0;i<panelCount;i++){ 
				temp=eval("figure"+i);		

/* ----------- The middle image opacity ----------- */	
			if (i==count){
					var s = document.getElementById("extendInfo");
			//		alert(s);
			//		console.log("figure"+(i-1));
					if ((i+1)>(panelCount-1))
						$("figure0").removeChild(s);   
					else
						$("figure"+(i+1)).removeChild(s);     
					$("figure"+i).appendChild(s);
					
					var span=document.getElementById('imageInfo'+i);
					span.style.opacity='1';
					span.innerHTML="figure"+i;
					temp.className='nonopa';
					temp.style['-webkit-filter']="grayscale(0)";
			}else{ 
				var span=document.getElementById('imageInfo'+i);
				span.style.opacity='0';
				temp.className='opa';
				temp.style['-webkit-filter']="grayscale(1)";
				
				if  (i==(count+1)%panelCount ){
						temp.className='middleopa';
					}
				if ((count-1)<0)
					eval("figure"+(panelCount-1)).className='middleopa'; 	
				else if (i==(count-1)%panelCount)
					temp.className='middleopa';
			}
//--------------------------------------------------------------------------------------------------	
				
			
/* ----------- Disable the animation when the front transform to the end ----------- */		
				if  (i==((count+(panelCount-3))%panelCount))
					temp.style[transitionProp ]="all  0s";

				if  (i==(Math.abs(count-2)%panelCount)){
					if (count==0 || count==1)
						eval("figure"+(panelCount-(2-count))).style[transitionProp ]="all  1s";
					else
						temp.style[transitionProp ]="all  1s";
					}
						
//--------------------------------------------------------------------------------------------------	

/* ----------- In order to let figure 10 follow figure 0 correctly ----------- */	
				if  (i==0)
					ram=arr[i];
				if  (i==(panelCount-1) ){	
					arr[i]=ram;
					temp.style[transformProp ]=ram;
					break;
				}
//--------------------------------------------------------------------------------------------------
				
				temp.style[ transformProp ] = arr[i+1];
				arr[i]=arr[i+1];
			}
			count--;		
}


    
window.addEventListener( 'DOMContentLoaded', rollinit, false);