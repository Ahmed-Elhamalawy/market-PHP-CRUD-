<?php 
include('config/db.php');
$SKU="";
$name="";
$price="";
$size="";
$SKUErr="";
$nameErr="";
$priceErr="";
$sizeErr="";

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

    if(empty($_POST['size'])) {
        $sizeErr = "Size is required";
    }
else {
    $SKU=filter_input(INPUT_POST, 'SKU', FILTER_SANITIZE_STRING);
    $name=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $price=filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
    $size=filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);

    if($SKUErr=="" && $nameErr=="" && $priceErr=="" && $sizeErr=="") {
        $sql = "INSERT INTO `DVD` (`SKU`, `name`, `price`, `size`) VALUES ('$SKU', '$name', '$price', '$size')";
        $result = mysqli_query($conn, $sql);

        if($result) {
            header("Location: getProducts.php");
        }
        
        
    }else {
        echo "Error";
    }

}}
?>