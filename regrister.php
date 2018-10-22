<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" href="./houtaid/layui/css/layui.css">
    <link rel="icon" href="./images/logo.png">
    <link rel="stylesheet" href="./bootstrap-4.1.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/css.css">
    <meta name=“viewport” content=“width=device-width,initial-scale=1,shrink-to-fit=no">
</head>
<body>
<div>
    <div style="width: 100%;opacity: 0.5;position: fixed">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="images/regrister1.jpg" alt="First slide" style="height: 100%;width: 100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="images/regrister2.jpg" alt="Second slide" style="height:100%;width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="overflow: hidden">
        <form action="reqsubmit.php">
            <div class="row" style="margin-top: 100px;">
                <div class="col-12 h1 text-center font-weight-bold" style="margin-bottom: 30px">欢迎注册</div>
                <div class="offset-4 col-1 text-right"><label for="username">用户名:</label></div>
                <div class="form-group col-4 text-left">
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="col-2 panduan utip">
                    请输入正确格式
                </div>
                <div class="offset-4 col-1 text-right"><label for="passwd">密码:</label></div>
                <div class="form-group col-4 text-left">
                    <input type="password" class="form-control" id="passwd" name="passwd">
                </div>
                <div class="col-2 panduan ">
                    请输入正确格式
                </div>
                <div class="offset-4 col-1 text-right"><label for="tel">电话:</label></div>
                <div class="form-group col-4 text-left">
                    <input type="text" class="form-control" id="tel" name="tel">
                </div>
                <div class="col-2 panduan ">
                    请输入正确格式
                </div>
                <div class="form-group col-12 text-center">
                    <button class="btn btn-success regrister" type="button">注册</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="./houtaid/layui/layui.all.js"></script>
<script src="./bootstrap-4.1.2-dist/js/jquery-3.3.1.min.js"></script>
<script src="./bootstrap-4.1.2-dist/js/bootstrap.min.js"></script>
<script src="js/regrister.js"></script>
<script>
    $('#carouselExampleControls').carousel({
        interval: 2000
    });
</script>
</body>
</html>