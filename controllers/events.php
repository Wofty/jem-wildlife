<?php
$heading = "Events";
$config = require('config.php');
$db = new Database($config['database']);
$query = "select * from events;";
$events = $db->query($query)->get();

require "views/events.view.php";