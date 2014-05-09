	var current=4;               // first pic id number 0
	var spin=document.getElementById('spinCircle');
	var panelCount = 7;
	
	function $(id){
		return document.getElementById(id);
	}
	function transformInit(){
		/*	for (var i = 1 ; i<=panelCount ; i++){                                              // up bound = total pictures
				var figure = document.createElement("figure");
				figure.setAttribute("id","figure"+i);
				var img = document.createElement("img");
				img.setAttribute("src","img/pic"+i+".jpg");
				var span = document.createElement("span");
				span.setAttribute("id","imageInfo"+i);
				figure.appendChild(img);
				figure.appendChild(span);
				$("spinCircle").appendChild(figure);
			}         */
			spinning();
		}
	
	function delayOpacity(i){
		spin.style.opacity=i;
	}
	
	function spinning(){
		if (spin.children.length != 0){
			for (var i = 0; i<panelCount ; i++){	
					
					if (i==current){
						spin.children[i].className="on";
						spin.children[i].style.webkitTransform="rotateY(360deg) translateX( 450px )";
					}else if (i == (current+1)%panelCount){
						spin.children[i].className="on";
						spin.children[i].style.webkitTransform="rotateY(270deg) translateX( 450px )";
					}
					else if (((current-1)>=0) && (i== (current-1)%panelCount)){
						spin.children[i].className="on";
						spin.children[i].style.webkitTransform="rotateY(450deg) translateX( 450px )";
					}
					else if  (((current-1)<0) && (i== panelCount-Math.abs(current-1)%panelCount)){     //solve when current==0 end current-1 <0 
						spin.children[i].className="on";
						spin.children[i].style.webkitTransform="rotateY(450deg) translateX( 450px )";
					}else{

						spin.children[i].className="off";
						spin.children[i].style.webkitTransform="rotateY(180deg) translateX( 450px )";
					}		
			}
		}
	}
	
	function rSpinning(){
		for (var i = 0; i<panelCount ; i++){
		
				if (i == current){
					spin.children[i].className="on";
					spin.children[i].style.webkitTransform="rotateY(360deg) translateX( 450px )";
				}else if (i == (current+1)%panelCount){

					spin.children[i].className="on";
					spin.children[i].style.webkitTransform="rotateY(270deg) translateX( 450px )";
				}else if (((current-1)>=0) && (i== (current-1)%panelCount)){
					spin.children[i].className="on";
					spin.children[i].style.webkitTransform="rotateY(450deg) translateX( 450px )";
				}
				else if  (((current-1)<0) && (i== panelCount-Math.abs(current-1)%panelCount)){                       //solve when current==0 end current-1 <0 
					spin.children[i].className="on";
					spin.children[i].style.webkitTransform="rotateY(450deg) translateX( 450px )";
				}
				else{
					
					spin.children[i].className="off";
					spin.children[i].style.webkitTransform="rotateY(180deg) translateX( 450px )";
				}

			}
	}
		
	function onNavButtonClick(increment,flag){
			if (flag == 1)
				clearTimeout(timer1);
			if (increment==1){
				current=(current+1)%panelCount;
				spinning();
			}
			else if (increment==-1){
				current=(current-1)%panelCount;
				if  (current<0)
					current = panelCount-1;
				rSpinning();
			}

			delayOpacity(.3);
			setTimeout("delayOpacity(1)",500);	
          }
    window.addEventListener( 'DOMContentLoaded', transformInit, false);