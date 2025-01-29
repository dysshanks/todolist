<?php
global $dbhost, $dbname, $dbuser, $dbpass, $dbname; // is niet nodig je krijgt error melding zonder maar het werkt dan wel nog
// haalt de configratie (config.php nodig maak aan waneer je nog nie heb zie config.example.php voor meer hulp)
require_once 'config.php';

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
