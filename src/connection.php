<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ctf_web_sec_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
