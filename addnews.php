<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Add news</title>
</head>
<body>
<?php
    include 'header.php';
?>
<div style="margin-right: 30%;margin-left: 30%; margin-top: 5%">
    <h2 class="font-weight-bold" style="text-align: center">Add News</h2>
    <div class="border border-primary p-3 mt-4">
        <div class="row">
            <div class="col-6">
                <img id="myImg" src="Image/mainImage.png" style="width: 100%">
            </div>
            <div class="col-6">
                <form action="addnewschack.php?s=0" method="post" id="form1" onsubmit="return chackInput()" enctype="multipart/form-data">
                    <h3>หัวเรื่องข่าว</h3>
                    <input type="text" id="header" name="header" style="width: 100%;">
                    <h5>รายละเอียด</h5>
                    <textarea type="text" id="detail" name="detail" style="width: 100%"></textarea>
                    <input class="" type="file" id="img" name="img" accept="image/*" onchange="readURL(this)">

                </form>
                    <div class="row mt-2">
                        <div class="col-6">
                            <button  type="submit" class="btn btn-success btn-block" form="form1">เพิ่มข่าว</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-danger btn-block" onclick="window.location.href='index.php'">ยกเลิก</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#myImg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(200);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    function chackInput() {
        var header = document.getElementById("header").value;
        var detail = document.getElementById("detail").value;
        var img = document.getElementById("img").value;
        if(header == ""){
            alert("กรุณาใส่หัวเรื่องข่าว");
            return false;
        }else if(detail == ""){
            alert("กรุณาใส่รายละเอียด");
            return false;
        }else if(img == ""){
            alert("กรุณาเลือกรูปภาพ");
            return false;
        }else {
            alert("เพิ่มข่าวสำเร็จ")
            return true;
        }
    }
</script>

</body>
</html>