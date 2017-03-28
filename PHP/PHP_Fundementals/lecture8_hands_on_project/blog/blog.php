<?php

require 'functions.php';
require 'db.php';
// use Blog\DB;

$conn = Blog\DB\connect($config);

if(!$conn) die('problem connecting to the DB!!');

?>
