<?php
	$level = "";

	// level_2 go to img folder
	$level_2 = "../";
	include($level."config.php");
	$_isPostIndex = false;
	$_isPostAccount = false;
	$_isPostComment = false;
	$_isPostMail = false;
	$_isPostOrder = false;
	$_isPostWarehouse = false;
	$_isCategories = true;
	include($level."layout.php");
?>