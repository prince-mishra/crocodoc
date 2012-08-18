<?php
include_once 'crocodoc.php';
$croco = new Crocodoc();
$ret = $croco->upload('http://dexter.pune.druva.com/sites/easyhire/sites/default/files/inSync-client-Status-Home.pdf');
$ret_inter = json_decode($ret, true);
$uuid = $ret_inter["uuid"];
var_dump($uuid);
$status = json_decode($croco->getStatus($uuid), true);
var_dump($status);
$status = $status[0]["viewable"];
var_dump($status);
while(($status != true) ) {
	sleep(10);
	$status = json_decode($croco->getStatus($uuid), true);
	var_dump($status);
	$status = $status[0]["viewable"];
}
$session = $croco->createSession($uuid);
$sessionStr = json_decode($session, true);
var_dump($sessionStr["session"]);
