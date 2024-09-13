<?php
include('config/db.php');

$SKU="";
$name="";
$price="";
$length="";
$width="";
$height="";
$SKUErr="";
$nameErr="";
$priceErr="";
$lengthErr="";
$widthErr="";
$heightErr="";

if(isset($_POST['submit'])) {
    if(empty($_POST['SKU'])) {
        $SKUErr = "SKU is required";
    }

    if(empty($_POST['name'])) {
        $nameErr = "Name is required";
    }

    if(empty($_POST['price'])) {
        $priceErr = "Price is required";
    }

    if(empty($_POST['length'])) {
        $lengthErr = "Length is required";
    }

    if(empty($_POST['width'])) {
        $widthErr = "Width is required";
    }

    if(empty($_POST['height'])) {
        $heightErr = "Height is required";
    }
else {
    $SKU=filter_input(INPUT_POST, 'SKU', FILTER_SANITIZE_STRING);
    $name=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $price=filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
    $length=filter_input(INPUT_POST, 'length', FILTER_SANITIZE_STRING);
    $width=filter_input(INPUT_POST, 'width', FILTER_SANITIZE_STRING);
    $height=filter_input(INPUT_POST, 'height', FILTER_SANITIZE_STRING);

    if($SKUErr=="" && $nameErr=="" && $priceErr=="" && $lengthErr=="" && $widthErr=="" && $heightErr=="") {
        $sql = "INSERT INTO `Book` (`SKU`, `name`, `price`, `length`, `width`, `height`) VALUES ('$SKU', '$name', '$price', '$length', '$width', '$height')";
        $result = mysqli_query($conn, $sql);
        
    }else {
        echo "Error";
    }

}}
?>