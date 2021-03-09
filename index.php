<?php

$frameworks  = [
	"CakePhp", "Symfony", "ZendFramework", "CodeIgniter", "Laravel"
];

$books = [
	"Peter Raedts - De Ontdekking van de Middeleeuwen" => "10",
	"Peter Rietbergen - Europa" => "8",
	"Sjaak Koenis - Het Verlangen naar Cultuur" => "10",
	"P. de Buck - Annotaties enzo" => "7",
];

?><!DOCTYPE HTML><html>
<head>
	<meta charset="UTF-8"><meta name=viewport content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css?v=1.0">

  <title>php_arrays</title>
</head>
<body>
	<h1>Aufgabe 22</h1>
	<ol><?php
foreach ($frameworks as $value)
{
	echo '<li>' . $value . '</li>';
}
	?></ol>
	<h2>Aufgabe 25</h2>
	<ul><?php
foreach ($books as $key => $value)
{
	echo '<li><b>' . $key . '</b> '. $value . '</li>';
}
	?></ul>
</body>
</html>