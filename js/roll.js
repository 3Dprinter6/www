var timer=1;
	var count=2;     //default preload left image
	var arr=new Array();
			arr[0]="translateX(-750px) ";
			arr[1]="translateX(-450px) ";
			arr[2]="rotateY(-60deg) translateZ(250px)";
			arr[3]="rotateY(0deg) translateZ(250px)";
			arr[4]="rotateY(60deg) translateZ(250px)";
			arr[5]="translateX(450px)";
			arr[6]="translateX(750px) ";
			arr[7]="translateX(1050px) ";
			arr[8]="translateX(1350px) ";
			arr[9]="translateX(1650px) ";
			arr[10]="translateX(1950px) ";
			arr[11]="translateX(2250px) ";
			arr[12]="translateX(2550px) ";
	
    var init = function() {
      var carousel = document.getElementById('carousel'),
          navButtons = document.querySelectorAll('#navigation button'),
          panelCount = carousel.children.length,
          transformProp = Modernizr.prefixed('transform'),
		  transitionProp = Modernizr.prefixed('transition'),
			onNavButtonClick = function( event ){
            var increment = parseInt( event.target.getAttribute('data-increment') );
			if (count>=0)	
				count=count%panelCount;	
			else if (count<0)
				count=panelCount-(Math.abs(count)%panelCount);   //count==-1 || -12|| -23 represent figure10
				
			
			
			if  (increment==1){
			var ram;                                   //save figure 10 in the beginning due to the for loop start from figure 10, its first coordinate must be record so that figure 0 know where to follow
			var temp;
			var ram2;
			for (var i=(panelCount-1);i>=0;i--){ 
				temp=eval("figure"+i);
					
					
/* ----------- Disable the animation when the end transform to the front ----------- */
		
					if  (i==(Math.abs(count-2)%panelCount)){
						if (count==0 || count==1)
							eval("figure"+(panelCount-(2-count))).style[transitionProp ]="-webkit-transform 0s";
						else
							temp.style[transitionProp ]="-webkit-transform 0s";
						}
					if  (i==((count+(panelCount-3))%panelCount)){
						temp.style[transitionProp ]="-webkit-transform 1s";
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

			else if (increment==-1){
			var ram;                                     //save figure 0 in the beginning due to the for loop start from figure 0, its first coordinate must be record so that figure 10 know where to follow
			var temp;
				for (var i=0;i<panelCount;i++){ 
					temp=eval("figure"+i);		

/* ----------- Disable the animation when the front transform to the end ----------- */		
					if  (i==((count+(panelCount-3))%panelCount))
						temp.style[transitionProp ]="-webkit-transform 0s";

					if  (i==(Math.abs(count-2)%panelCount)){
						if (count==0 || count==1)
							eval("figure"+(panelCount-(2-count))).style[transitionProp ]="-webkit-transform 1s";
						else
							temp.style[transitionProp ]="-webkit-transform 1s";
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
          };

      for (var i=0; i < 2; i++) {
        navButtons[i].addEventListener( 'click', onNavButtonClick, false);
      }
    };
    window.addEventListener( 'DOMContentLoaded', init, false);