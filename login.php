<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>login</title>
<!--    <link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<nav class="navbar navbar-light" style="background-color: #00a3cc;color: white">
    <a class="navbar-brand" href="index.php" style="color: white">FoodShop</a>
</nav>
<body style="background-color: #00a3cc">
<?php
    $l = $_REQUEST["l"];
?>
<div class="container pt-5" >
    <h3 style="color: white ;text-align: center;margin-bottom: 50px">login</h3>
    <?php if($l == 2){ ?>
    <h5 style="color: #cc0000 ;text-align: center">Invalid phone number or email.</h5>
    <?php } ?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 rounded p-3" style="color: black;background-color: white">
            <form action="check.php?c=2" method="POST" onsubmit="return check()">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="tel">Phone number</label>
                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="089999999" >
                </div>
                <div style="align-content: center;text-align: center">
                    <button type="submit" class="btn btn-primary" onclick="return check()">Login</button>
                </div>

            </form>
        </div>
        <div class="col-3" ></div>
    </div>
</div>
<script>
    function check() {
        var phoneFormat = /^\d{10}$/;
        var patternemail = /^[a-zA-Z_0-9\s]{1,50}$/;
        let email = document.getElementById("email").value;
        let tel = document.getElementById("tel").value;
        var res = email.split("@");
        if(res.length != 2 || !res[0].match(patternemail) || (res[1] != "gmail.com" && res[1] != "hotmail.com")) {
            alert("กรุณากรอกข้อมูล email ให้ถูกต้อง " +
                "\n 1. ชื่อ email ต้องเป็นตัวอักษรภาษาอังกฤษพิมพ์ใหญ่ พิมพ์เล็ก ตัวเลข หรือสัญญาลักษณ์ \"_\" เท่านั้น " +
                "\n2. ความยาวชื่อ email ต้องอยู่ระหว่าง 1 ถึง 50 ตัวเท่านั้น" +
                "\n3. จะต้องตามด้วย \"@gmail.com\" หรือ \"@hotmail.com\" เท่านั้น");
            return false;
        }
        else if(!tel.match(phoneFormat)){
            window.alert('กรุณากรอกข้อมูล Phone number ให้ถูกต้อง ต้องอยู่ในรูปแบบตัวเลข 10 หลักเท่านั้น');
            return false;
        }else{
            return true;
        }
    }
</script>
</body>
</html>