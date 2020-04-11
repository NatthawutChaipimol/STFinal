<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <meta charset="UTF-8">
</head>
<body>
<?php
session_start();
if (!isset($_SESSION["name"])) {
    $_SESSION["name"] = "";
}
?>
<nav class="navbar navbar-light" style="background-color: #00a3cc;color: white">
    <a class="navbar-brand" href="index.php" style="color: white">FoodShop</a>

    <?php
    if ($_SESSION["name"] == "") {
        ?>
        <div class="form-inline">
            <button class="btn btn-light btn-outline-primary my-2 my-sm-0 mr-2"
                    onclick="window.location.href = 'login.php?l=1'"><i class="fas fa-cat"></i>
            </button>
            <button class="btn btn-light btn-outline-primary my-2 my-sm-0" onclick="window.location.href = 'register.php?r=1'"><i class="fas fa-otter"></i>
            </button>
        </div>
    <?php } else { ?>
        <div class="form-inline">
            <a style="margin-right: 10px"><?php echo $_SESSION["name"]; ?></a>
            <button class="btn btn-light btn-outline-primary my-2 my-sm-0 mr-2"
                    onclick="window.location.href = 'addFoodPicture.php';">Add Food picture</button>
            <button class="btn btn-light btn-outline-primary my-2 my-sm-0 mr-2"
                    onclick="window.location.href = 'addnews.php';">Add News</button>
            <button class="btn btn-light btn-outline-primary my-2 my-sm-0"
                    onclick="window.location.href = 'check.php?c=1';">Logout
            </button>
        </div>
    <?php } ?>
</nav>

</body>
</html>