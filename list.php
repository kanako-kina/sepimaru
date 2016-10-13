<?php
$user = "sepimaru";
$pass = "sepiyama";
$dbh = new PDO('mysql:host=localhost;dbname=board;charset=utf8',$user, $pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM comment";
$stmt = $dbh->query($sql);
$result = $stmmt->fetchALL(PDO::FETCH_ASSOC);
var_dump($result);
$dbh = null;
?>
