<?php
require_once __DIR__ . "/../vendor/autoload.php";
Toro::serve(array(
	"/" => "Controllers\\HomeController",
	"/update" => "Controllers\\UpdateController",
	"/adduser" => "Controllers\\AddUserController"
	));
?>
