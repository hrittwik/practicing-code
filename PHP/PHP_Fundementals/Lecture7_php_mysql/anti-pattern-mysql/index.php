<?php
require 'functions.php';
require 'config.php';

$conn = connect($config['DB_HOST'],
                $config['DB_USERNAME'],
                $config['DB_PASSWORD'],
                'practice');

$results = query('select * from users');
require 'index.view.php';
?>
