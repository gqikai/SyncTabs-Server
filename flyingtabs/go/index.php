<?php
define("APP_PATH","../");
define("APP_DEBUG","true");
session_start();

	function showBug($msg,$color="red"){
		echo("<pre color:".$color.">");
		var_dump($msg);
		echo("</pre>");
	}
	

define("SITE_URL","http://localhost/think/flyingtabs/");
define("INDEX_URL","http://localhost/think/flyingtabs/go/index.php/");
define("CSS_URL",SITE_URL."go/public/css/");
define("JS_URL",SITE_URL."go/public/js/");
define("IMG_URL",SITE_URL."go/public/image/");

header("Access-Control-Allow-Credentials: true");

header("Access-Control-Allow-Origin: http://localhost:63343");
include "../../ThinkPHP/ThinkPHP.php";