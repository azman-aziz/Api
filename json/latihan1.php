<?php

$mahasiswa = [
	[
	"nama" => "aziz Maulana",
	"alamat" => "127.0.0.1"
	],
	[
	"nama" => "as Maulana",
	"alamat" => "127.0.0.1"
	]

];

$data = json_encode($mahasiswa,true);
var_dump($data);