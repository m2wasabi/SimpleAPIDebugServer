<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) return false;

error_log("GET: " . print_r($_GET, true));

if(in_array($_SERVER['REQUEST_METHOD'], ['POST', 'PUT'])) {
	if($_SERVER['CONTENT_TYPE'] == 'application/json'){
		$json = file_get_contents("php://input");
		error_log("RAW: " . print_r($json, true));
		
		error_log("JSON: " . print_r(json_decode($json, true), true));
	}
	else {
		error_log("POST: " . print_r($_POST, true));
	}
}
