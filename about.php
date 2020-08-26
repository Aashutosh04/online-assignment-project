<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="about.css">
	<title>About Us</title>
</head>
<body>
	<div class="box1">
		
		<h1>Our Team</h1>
	</div>

<div class="box2">
	<div class = "context1">




<div class="column1">
	<img src="umar.png">
	<div id = "titlev">
		<div id="title1"></div>
		

</div>
<div id="description1"></div>
</div>
<div class="column2">
	<img src="ashu.png">
	<div id = "titlev">
		<div id="title2"></div>
	</div>
		<div id="description2"></div>


</div>
<div class="column3">
	<img src="ujwal.png">
	<div id = "titlev">
		<div id="title3"></div>
	</div>
		<div id="description3"></div>

</div>

<div class="context1">
<div class="column4">
	<img src="mad.png">
	<div id = "titlev"><div id="title4"></div></div>
		<div id="description4"></div>

</div>

<div class="column5">
	<img src="shiv.jpg">
	<div id = "titlev"><div id="title5"></div></div>
		<div id="description5"></div>

</div>


</div>

<div id="box3">
	<div id="libray" ></div>
 <h2> How we made this website </h2>
 <video height="700" width="700"autoplay>
  <source src="intp.mp4" type="video/mp4">
  <source src="intp.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
 
 </div>
<script>

function myFunction(xml) {
	
   var i;
   var xmlDoc = xml.responseXML;
   var x = xmlDoc.getElementsByTagName("member");
 
   console.log(x);
   
   for (i = 0; i <x.length; i++) {
   
    name = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
	//esignation = x[i].getElementsByTagName("designation")[0].childNodes[0].nodeValue;
    description =x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue;

	//alert(name);
    document.getElementById('title'+(i+1)).innerHTML = name;
    
    document.getElementById("description"+(i+1)).innerHTML = description;
   }
	
}


function loadXMLDoc() {
	
 		 var xmlhttp = new XMLHttpRequest();
  		xmlhttp.onreadystatechange = function() {
			
	    myFunction(this);
	  };
  xmlhttp.open("GET", "details.xml", true);
  xmlhttp.send();
}
  
window.onload = loadXMLDoc();

</script>
</body>
</html>