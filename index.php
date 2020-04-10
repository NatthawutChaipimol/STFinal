<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Index</title>
</head>
<?php
    session_start();
    if(!isset($_SESSION["name"])){
        $_SESSION["name"] = "";
    }
$_SESSION["name"] = "5555";
    $conn = new mysqli("localhost", "root", "", "final_soft-test2");
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    $sql1 = "SELECT * FROM foodimg";
    $result1 = $conn->query($sql1);
    $sql2 = "SELECT * FROM news";
    $result2 = $conn->query($sql2);
?>
<body>
<?php
//    include 'header.php';
//?>
<nav class="navbar navbar-light" style="background-color: #00a3cc;color: white">
    <a class="navbar-brand" href="index.php" style="color: white">FoodShop</a>
    <form class="form-inline">
        <a style="margin-right: 10px"><?php echo $_SESSION["name"]; ?></a>
        <?php
        if($_SESSION["name"]==""){
        ?>
            <button class="btn btn-light btn-outline-primary my-2 my-sm-0 mr-2" onclick="location.href='login.php'">Login</button>
            <button class="btn btn-light btn-outline-primary my-2 my-sm-0" onclick="location.href='register.php'">Register</button>
        <?php }else{ ?>
            <button class="btn btn-light btn-outline-primary my-2 my-sm-0 mr-2">Add Food picture</button>
            <button class="btn btn-light btn-outline-primary my-2 my-sm-0 mr-2">Add News</button>
            <button class="btn btn-light btn-outline-primary my-2 my-sm-0" onclick="location.href='check.php?c=1'">Logout</button>
        <?php } ?>
    </form>
</nav>
<div class="container mt-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $foodstart = true;
            while($row = $result1->fetch_assoc()) {
                if($foodstart == true){
                        $foodstart = false; ?>
            <div class="carousel-item active">
                <img src="Image/<?php echo $row["img"]; ?>" class="d-block w-100" alt="..."height="500px">
            </div>
            <?php }else{?>
                    <div class="carousel-item">
                        <img src="Image/<?php echo $row["img"]; ?>" class="d-block w-100" alt="..."height="500px">
                    </div>
            <?php }
            } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <?php while($row = $result2->fetch_assoc()) { ?>
    <div class="card mb-3 mt-4" >
        <div class="row no-gutters">
            <div class="col-md-2">
                <img src="Image/<?php echo $row["nImg"]; ?>" class="card-img" alt="..." style="height: 200px">
            </div>
            <div class="col-md-10">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row["headLine"]; ?></h5>
                    <p class="card-text">
                        <?php echo $row["newsContent"]; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>