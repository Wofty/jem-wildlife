<?php
$heading = "Home";
$config = require('config.php');
$db = new Database($config['database']);
$query_animals = "select * from animals order by rand() limit 3 ";
$animals = $db->query($query_animals)->get();
$query_events = "select * from events where date >= now() order by date limit 3 ";
$events = $db->query($query_events)->get();

require "views/index.view.php";





