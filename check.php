<?php
session_start();
$c=$_REQUEST["c"];
echo $c;
$conn = new mysqli("localhost", "root", "", "final_soft-test2");
if($c==1){
    session_destroy();
    echo "logout";
    header("Location:index.php");
}elseif ($c==2){
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    echo $email . " " . $tel;
    $sql = "SELECT * FROM `member` WHERE `email` = '".$email."' AND `tel` = '".$tel."'";
    $result = $conn->query($sql);
    echo "num = ".$result->num_rows;
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $_SESSION["name"] = $row["firstName"];
        header("Location:index.php");
    }else{
        header("Location:login.php?l=2");
    }
}elseif ($c==3){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $sql = "SELECT * FROM `member` WHERE `email` = '".$email."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        header("Location:register.php?r=2");
    }else{
        $sql2 = "INSERT INTO `member`(`firstName`, `lastName`, `tel`, `email`) VALUES ('".$fname."','".$lname."','".$tel."','".$email."')";
        if ($conn->query($sql2) === TRUE) {
            echo "New record created successfully";
            header("Location:login.php?l=1");
        } else {
            echo "Error: " . $sql2 . "<br>" . $conn->error;
        }
    }


}
?>