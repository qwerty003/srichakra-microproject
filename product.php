<html>
<head>
<title> Products </title>
<link rel="stylesheet" type="text/css" href="product.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<?php
    include('navbar.php');
?>

<! ITEMS !>
<div id = "root">
    <div class = "items">
	<?php
	    mysql_connect("localhost","root","") or die(mysql_error()); 
	    mysql_select_db("surya") or die(mysql_error("Unable to Connect to Database"));
	    $squery="select pid,pname,pdesc from products";
	    $results = mysql_query($squery)or die(mysql_error());
	    $rcount = mysql_num_rows($results);
        if($rcount>0){
			while($row1=mysql_fetch_array($results)){
				echo '<product name = "' .$row1['pname'].'" description = "'.$row1['pdesc'].'" productid = "'.$row1['pid'].'">';
				echo '</product>';
			}
		}
		
		else{
			
			echo 'No matches Found';
			
		}
	?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="scripts/productscript.js"></script>


<?php
    include('footer.php');
?>