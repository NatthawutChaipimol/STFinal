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
            <form action="check.php?c=3" method="POST" onsubmit="return chackInput()">
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
<script>
    function chackInput() {
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var email = document.getElementById("email").value;
        var tel = document.getElementById("tel").value;

        var res = email.split("@");
        var patternname = /^[a-zA-Zก-๏\s]{2,50}$/;
        var patternemail = /^[a-zA-Z_0-9\s]{1,50}$/;
        var phoneFormat = /^\d{10}$/;

        if(!fname.match(patternname)) {
            alert("กรุณากรอกข้อมูล First name ให้ถูกต้อง\n 1. First name ต้องเป็นตัวอักษรภาษาไทยหรือภาษาอังกฤษเท่านั้น\n2. ความยาวของ First name ต้องอยู่ระหว่าง 2 ถึง 50 ตัวเท่านั้น")
            return false;
        }else if(!lname.match(patternname)){
            alert("กรุณากรอกข้อมูล Last name ให้ถูกต้อง\n 1. Last name ต้องเป็นตัวอักษรภาษาไทยหรือภาษาอังกฤษเท่านั้น\n2. ความยาวของ Last name ต้องอยู่ระหว่าง 2 ถึง 50 ตัวเท่านั้น")
            return false;
        }else if(res.length != 2 || !res[0].match(patternemail) || (res[1] != "gmail.com" && res[1] != "hotmail.com")) {
            alert("กรุณากรอกข้อมูล email ให้ถูกต้อง " +
                "\n 1. ชื่อ email ต้องเป็นตัวอักษรภาษาอังกฤษพิมพ์ใหญ่ พิมพ์เล็ก ตัวเลข หรือสัญญาลักษณ์ \"_\" เท่านั้น " +
                "\n2. ความยาวของชื่อ email ต้องอยู่ระหว่าง 1 ถึง 50 ตัวเท่านั้น" +
                "\n3. จะต้องตามด้วย \"@gmail.com\" หรือ \"@hotmail.com\" เท่านั้น");
            return false;
        }
        else if(!tel.match(phoneFormat)){
            window.alert('กรุณากรอกข้อมูล Phone number ให้ถูกต้อง ต้องอยู่ในรูปแบบตัวเลข 10 หลักเท่านั้น');
            return false;
        }else{ return true; }
    }
</script>
</html>