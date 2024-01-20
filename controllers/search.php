<?php
$heading = "Search Events";
$events = [];
$records="";
$return="";
if(isset($_GET['name']) && !empty($_GET['name'])){
    $return="search?name=".htmlspecialchars($_GET['name']);
    $config = require('config.php');
    $db = new Database($config['database']);
    $query = "select * from events where name LIKE :name OR description LIKE :name OR type LIKE :name";
    $filter = "%".htmlspecialchars($_GET['name'])."%";
    $events = $db->query($query, ['name' => $filter])->get();
    if (count($events) == 0) {
        $records = "You have found no matches, please try again";
    } else
    {
        $records = "You have found ". count($events) . " records from your search";
    }
}
require "views/search.view.php";
