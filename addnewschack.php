<?php
$header = $_POST["header"];
$detail = $_POST["detail"];
$img = $_FILES["img"]["name"];
$status = $_REQUEST["s"];
$conn = new mysqli("localhost", "root", "", "final_soft-test");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);


if($status == "0"){
    $sql = "INSERT INTO news (`nimg`,`headLine`,`newsContent`) value ('$img','$header','$detail')";
    if($conn->query($sql)===true){
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $target = "Image/".basename($_FILES["img"]["name"]);
    move_uploaded_file($_FILES['img']['tmp_name'],$target);
    header("Location:index.php");
}