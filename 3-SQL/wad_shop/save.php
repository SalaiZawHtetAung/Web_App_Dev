<?php

echo "<pre>";

$conn = mysqli_connect("localhost","zha","ktztloveu");
// var_dump($conn);

if(!$conn){
    echo mysqli_connect_error();
}else{
    echo "success";
}

die();

$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

//SQL

$sql = "INSERT INTO products (name,price,stock) VALUES ('$name',$price,$stock)";

echo $sql;