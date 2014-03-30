function loadXMLDoc(filename)
{
	if (window.XMLHttpRequest)
	{
		xhttp=new XMLHttpRequest();
	}
	else // code for IE5 and IE6
	{
		xhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	if (!xhttp) {
		alert('Giving up :( Cannot create an XMLHTTP instance');
		return false;
	}
	xhttp.open("GET",filename,false);
	xhttp.send();
	return xhttp.responseXML;
}