<?php

header("Content-Type:application/json");

if($_SERVER["REQUEST_METHOD"] != "POST"){
    $message =  json_encode(["message" => "POST METHOD ONLY"]);
    die($message);
}

if(empty($_POST["width"]) || empty($_POST["breadth"])){
    $message =  json_encode(["message" =>"Required both  width and breadth"]);
    die($message);
}