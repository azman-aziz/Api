<?php

// $mahasiswa = [
// 	[
// 	"nama" => "aziz Maulana",
// 	"alamat" => "127.0.0.1"
// 	],
// 	[
// 	"nama" => "as Maulana",
// 	"alamat" => "127.0.0.1"
// 	]

// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc;', 'admin', 'password');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();

$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
var_dump($data);