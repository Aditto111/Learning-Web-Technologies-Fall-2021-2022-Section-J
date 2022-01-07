<?php
require_once '../model/db_connect.php';
$mysqli = new mysqli("localhost", "root", "", "portal");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT *  FROM `parents_info` WHERE USERNAME = ?";

$stmt = $mysqli->prepare($sql);


