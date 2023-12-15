<?php
require 'vendor/autoload.php';

use KeePassPHP\KeePassPHP;
use KeePassPHP\Key\CompositeKey;

$databaseFile = '';
$password = '';

$key = new CompositeKey();
$key->addKey(KeePassPHP::keyFromPassword($password));

$db = KeePassPHP::openDatabaseFile(
	$databaseFile,
	$key,
	$err
);

