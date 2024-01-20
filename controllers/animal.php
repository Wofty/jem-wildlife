<?php

$config = require('config.php');
$db = new Database($config['database']);
$animal = $db->query("select * from animals where id = :id" , ['id' => $_GET['id']])->findOrFail();
$heading = $animal['common_name'];
$returnUrl = $_GET ['return'];
require "views/animal.view.php";