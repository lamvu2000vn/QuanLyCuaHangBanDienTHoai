<?php
	include_once('../config.php');
	$level = L1;
	$_hasSlideShow=false;
	$_isPostIndex=false;
	$_isPostCart=true;
	$_isPostOrder=false;
    $Show_ShopPage = false;
    $Show_SingleProduct = false;
    $search_page = false;
	$account = false;
    include($level."DB.php");
	include_once($level.'layout.php');
?>