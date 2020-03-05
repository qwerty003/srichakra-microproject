<?php
mysql_connect("localhost","root","") or die(mysql_error());
// Create Database
$createdb="CREATE DATABASE IF NOT EXISTS surya";
mysql_query($createdb);

//Select database
mysql_select_db("surya") or die(mysql_error("Unable to Connect to Database"));

//Create tables in database  

$createt1="CREATE TABLE IF NOT EXISTS `surya`.`products` (`pid` INT( 10 ) NOT NULL ,`pname` VARCHAR( 10 ) ,`pdesc` VARCHAR( 10 ) ,`pcost` INT( 10 ) ,`pdimens` VARCHAR( 10 ) ,PRIMARY KEY (`pid`)) ENGINE = INNODB";
mysql_query($createt1);


$check = 1;

include('main.php');
?>