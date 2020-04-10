<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Add news</title>
</head>
<body>
<div style="margin-right: 30%;margin-left: 30%; margin-top: 5%">
    <h2 class="font-weight-bold" style="text-align: center">เพิ่มข่าว</h2>
    <div class="border border-primary p-3 mt-4">
        <div class="row">
            <div class="col-6">
                <img id="myImg" src="Image/mainImage.png" style="width: 100%" >
            </div>
            <div class="col-6">
                <h3>หัวเรื่องข่าว</h3>
                <input type="text" style="width: 100%;">
                <h5>รายละเอียด</h5>
                <textarea type="text" style="width: 100%"></textarea>
                <div class="row mt-2">
                    <div class="col-8">
                        <input class="" type="file" id="img" name="img" accept="image/*" onchange="readURL(this)">
                    </div>
                    <div class="col-4">
                        <button type="button" class="btn btn-danger" onclick="window.location.href='#'">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#myImg')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</body>
</html>