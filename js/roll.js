var count=0;     //first image

var arr=new Array();
arr[0]="translateX(-1700px) ";
arr[1]="translateX(-1400px) ";
arr[2]="translateX(-1100px) ";
arr[3]="translateX(-800px) ";
arr[4]="translateX(-500px) ";
arr[5]="translateX(-230px) rotateY( -45deg ) translateZ( 50px )";
arr[6]="rotateY(0deg) translateZ( 150px )";
arr[7]="translateX(230px) rotateY( 45deg ) translateZ( 50px )";
arr[8]="translateX(500px) ";
arr[9]="translateX(800px) ";
arr[10]="translateX(1100px) ";
arr[11]="translateX(1400px) ";
arr[12]="translateX(1700px) ";

var dist = parseInt(arr.length/2) - 2;  // leftleft img

function $(id){
	return document.getElementById(id);
}

function onNavButtonClick(increment,flag){
			
			if  (flag == 1){
				clearTimeout(timer1);    //setTimeout id name
			}								
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
					var span=document.getElementById('imageInfo'+i);
					span.style.opacity='0.8';
					span.innerHTML="figure"+i;
					temp.style['-webkit-filter']="grayscale(0)";
					temp.className='nonopa';
					}
				else {
					
					var span=document.getElementById('imageInfo'+i);
					span.style.opacity='0';
					temp.style['-webkit-filter']="grayscale(1)";
					temp.className='opa';
					if ((i==(count+dist+2)%panelCount) || (i==(count+dist+4)%panelCount )){
						temp.className='middleopa';
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
					var span=document.getElementById('imageInfo'+i);
					span.style.opacity='0.8';
					span.innerHTML="figure"+i;
					temp.className='nonopa';
					temp.style['-webkit-filter']="grayscale(0)";
			}else{ 
				var span=document.getElementById('imageInfo'+i);
				span.style.opacity='0';
				temp.className='opa';
				temp.style['-webkit-filter']="grayscale(1)";
				
				if  (i==(count+dist)%panelCount || i == (count+dist+2)%panelCount){
						temp.className='middleopa';
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

