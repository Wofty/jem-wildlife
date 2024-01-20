<?php

$config = require('config.php');
$db = new Database($config['database']);
$event = $db->query("select * from events where id = :id" , ['id' => $_GET['id']])->findOrFail();
$heading = $event['name'];
$returnUrl = $_GET ['return'];


require "views/event.view.php";

