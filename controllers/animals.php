<?php
$heading = "Animals";
$config = require('config.php');
$db = new Database($config['database']);
$query ="select * from animals";
$animals = $db->query($query)->get();
require "views/animals.view.php";