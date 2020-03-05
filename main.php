<html>
<head>
<title> Home </title>
<link rel="stylesheet" type="text/css" href="main1.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<?php
    include('navbar.php');
?>

<! IMAGE-SLIDER !>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="img_snowtops.jpg" style="width:100%">
  <img class="mySlides" src="img_lights.jpg" style="width:100%">
  <img class="mySlides" src="img_mountains.jpg" style="width:100%">
  <img class="mySlides" src="img_forest.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

<! ITEMS !>

<div class = "items">
    <div class = "items-holder">
	    <div class = "items-card"><div class = "items-card-image"></div>Sample text lies here Sample text lies here Sample text lies here.</div>
	    <div class = "items-card"><div class = "items-card-image"></div>Sample text lies here Sample text lies here Sample text lies here.</div>
	    <div class = "items-card"><div class = "items-card-image"></div>Sample text lies here Sample text lies here Sample text lies here.</div>
	</div>

</div>


<! QUIZ !>

<div class = "quiz">
    <br>
    <h4> CHANCE TO WIN A PRESSURE COOKER </h4>
	<br>
	<div class= "qom"><br>
	<h2>QUIZ OF THE MONTH</h2>
	</div>
	
</div>

<! MESSAGE !>

<div class = "message">
    <div class = "message-image">

    </div>
	
	
	<div class = "message-text">
    <h2>A MESSAGE FROM OUR MD</h2>
    </div>
	
	
</div>

<! AWARDS!>

<div class = "awards">
    <div class = "awards-holder">
	    <h5> AWARDS </h5>
		<p>____________________</p><br>
	    <div class = "awards-card"></div>
	    <div class = "awards-card"></div>
	    <div class = "awards-card"></div>
	</div>

</div>

























<?php
    include('footer.php');
?>

