<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主页</title>
    <link rel="icon" href="./images/logo.png">
    <link rel="stylesheet" href="bootstrap-4.1.2-dist/css/bootstrap.min.css">
    <meta name=“viewport” content=“width=device-width,initial-scale=1,shrink-to-fit=no">
</head>
<body>
<div style="background-color: white;height:120px;overflow: hidden">
    <div class="container" style="height: 80px;margin-top: 20px;">
        <div class="row">
            <div class="col-2"
                 style="background-image: url('images/logo.png');height: 80px;background-size: cover"></div>
            <div class="col-1 text-center" style="color: #808080;line-height: 80px;">成都模特</div>
            <div class="col-1 text-center" style="color: #808080;line-height: 80px;">模特库</div>
            <div class="col-1 text-center" style="color: #808080;line-height: 80px;">招募计划</div>
            <div class="col-1 text-center" style="color: #808080;line-height: 80px;">时尚生活</div>
            <div class="col-1 text-center" style="color: #808080;line-height: 80px;">行业防骗</div>
            <div class="col-1 text-center" style="color: #808080;line-height: 80px;">关于我们</div>
            <div class="col-4 text-center" style="line-height: 80px"></div>
        </div>
    </div>
</div>
<div style="background-color: #9fcdff;width: 100%;">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height:600px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" src="images/1.jpg" alt="First slide" style="height: 600px;width: 100%">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="images/2.jpg" alt="Second slide" style="height:600px;width: 100%">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="images/3.jpg" alt="Third slide" style="height: 600px;width: 100%">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="images/4.jpg" alt="fours slide" style="height: 600px;width: 100%">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="images/5.jpg" alt="fours slide" style="height: 600px;width: 100%">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="images/6.jpg" alt="fours slide" style="height: 600px;width: 100%">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
</div>
</body>
<script src="bootstrap-4.1.2-dist/js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.2-dist/js/bootstrap.min.js"></script>
<script>
    $('#carouselExampleControls').carousel({
        interval: 2000
    });
</script>
</html>