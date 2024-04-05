<?php
//INSERT INTO `orders`(`orderID`, `houtID`, `hoeveelheid`, `date`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
include 'db.php';
$sql = "SELECT * FROM `hout`"; 
$result = mysqli_query($con, $sql); 
foreach ($result as $row){
    $amount = $_POST[$row['houtID']];
    $houtID = $row['houtID'];
    $date = date('Y-m-d H:i:s');
    if($amount != 0){
        $sql = "INSERT INTO `orders`(`orderID`, `houtID`, `hoeveelheid`, `date`) VALUES ('',$houtID,'$amount','$date')"; 
        $result = mysqli_query($con, $sql); 
    }
}
header("Location: overzicht.php");