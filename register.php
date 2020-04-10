<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>register</title>
</head>
<nav class="navbar navbar-light" style="background-color: #00a3cc;color: white">
    <a class="navbar-brand" href="index.php" style="color: white">FoodShop</a>
</nav>
<body style="background-color: #00a3cc">
<?php
    $r = $_REQUEST["r"];
?>
<div class="container pt-5" >
    <h3 style="color: white ;text-align: center;margin-bottom: 50px">register</h3>
    <?php if($r == 2){ ?>
        <h5 style="color: #cc0000 ;text-align: center">This email is not available.</h5>
    <?php } ?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 rounded p-3" style="color: black;background-color: white">
            <form action="check.php?c=3" method="POST">
                <div class="form-group">
                    <label for="fname">First name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First name">
                </div>
                <div class="form-group">
                    <label for="lname">Last name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="tel">Phone number</label>
                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="089999999">
                </div>
                <div style="align-content: center;text-align: center">
                    <button type="submit" class="btn btn-primary">register</button>
                </div>
            </form>
        </div>
        <div class="col-3" ></div>
    </div>

</div>
</body>
</html>