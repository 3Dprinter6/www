	var current=null;             //the ID of the image clicked
	var currentPage=0;            //currentPage's first picture no.
	var root_node;                //gallery.length = the amount of pictures a page have shown
	function $ (id){
		return document.getElementById(id);
	}
	function picScale(id) {
			$("mask").style.opacity="0.2";
			current=id;
			$("scalePicture").src=$(current).src;
			$("scale").style.webkitTransform=" scale(0.8,0.8)";
		}
	function picClose(){
		$("mask").style.opacity="1";
		var temp= $("scale");
		temp.style.webkitTransform=" scale(0,0)";
	//	temp.style.display="none";
	}

	function nextPic(){
		var pictureCount=gallery.children.length;
		if (root_node!=null){
			if ((root_node.length-currentPage)-pictureCount<0){
				pictureCount=root_node.length-currentPage;
			}
		}
		var temp=current.split("img");
	//	alert(pictureCount);

			//here
		current="img"+((++temp[1])%pictureCount);
	//	alert(pictureCount);
		$("scalePicture").src=$(current).src;

		}
	function previousPic(){
		var pictureCount=gallery.children.length;
		if (root_node!=null){
			if ((root_node.length-currentPage)-pictureCount<0){
				pictureCount=root_node.length-currentPage;
			}
		}
		var temp=current.split("img");
		if (temp[1]>0)
			current="img"+((--temp[1])%pictureCount);
		else
			current="img"+((--temp[1]+pictureCount)%pictureCount);
		$("scalePicture").src=$(current).src;
		}

		//----------------------------------AJAX--------------------------------------------------------------


	 function loadXMLFile(increment){
		//	var increment = parseInt( event.target.getAttribute('data-increment') );

			$('loadingIMG1').className='on';
			$("gallery").style.opacity="0.2";
      	  // insert AJAX code here
			var http_request = false;                                    //default false
			if(window.XMLHttpRequest) { // Mozilla, Safari, ....
			http_request = new XMLHttpRequest();
				  }
			else if(window.ActiveXObject) { // IE
			try {
				http_request = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch (e) {
			try {
				http_request = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e) {}
			}
			}
			if (!http_request) {
				alert('Giving up :( Cannot create an XMLHTTP instance');
				return false;
				}
			var temp=function(){
				alertContent(http_request,increment);
			}

			if (increment==1)
					currentPage=currentPage+$("gallery").children.length;
			else
				currentPage=currentPage-$("gallery").children.length;

			http_request.onreadystatechange=function(){setTimeout(temp,1000);}
		//	http_request.onreadystatechange=function(){temp();}
			var url="gallery.xml?v=1";
			http_request.open('GET',url,true);
			http_request.send(null);

		}

	 function alertContent(http_request,increment){
		if (http_request.readyState==4){
			if (http_request.status==200){
				var xmldoc=http_request.responseXML;
				root_node = xmldoc.getElementsByTagName('src');   //global variable root _node
				var gallery=$("gallery").children;
				var gallery_node;

				for (var i=currentPage;i<(currentPage+gallery.length);i++){

				//	alert("current"+currentPage);
					gallery_node=i%gallery.length;
					if (root_node.length-i>0){
						gallery[gallery_node].src=root_node[i].childNodes[0].nodeValue;
					}else if  (root_node.length-i<=0){
						gallery[gallery_node].src="";
					}



				}
				//anode.appendChild(tnode);=content;

				$("nextGallery").className="on";                          //remove next or previous arrow when reaching the beginning or the end of the page
				$("previousGallery").className="on";
				if ((currentPage+gallery.length)>=root_node.length)
					$("nextGallery").className="off";
				if ((currentPage-gallery.length)<0)
					$("previousGallery").className="off";
				$('loadingIMG1').className='off';
				$("gallery").style.opacity="1";
			}else{
				alert("There's seems to be something wrong");
			}
		}
	}
