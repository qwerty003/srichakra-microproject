<html>
<head>
<title> product-view </title>
<link rel="stylesheet" type="text/css" href="product-view.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<?php
    include('navbar.php');
?>

<! MAIN-ITEM !>
<div id = "root">
    <div class = "mitem">
	    <mproduct v-for = "item in items" v-bind:item = "item">

        </mproduct>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="scripts/product-view.js"></script>

<?php
    include('footer.php');
?>