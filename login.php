<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="icon" href="./images/logo.png">
    <link rel="stylesheet" href="bootstrap-4.1.2-dist/css/bootstrap.min.css">
    <meta name=“viewport” content=“width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="./css/css.css">
    <style>
        a:visited{
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div style="line-height: 130px">
            <img src="./images/logo.png" width="100" height="60">
        </div>
        <div class="col-2 text-left h2 font-weight-bold" style="line-height: 130px">
            欢迎登录
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#02984a">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="./images/login.jpg" alt="" style="margin: 30px 0">
            </div>
            <div class="col-6">
                <div style="background-color: white; margin: 30px 0;height: 280px;overflow: hidden">
                    <div class="text-center">
                        <form action="">
                            <div class="row" style="margin-top: 20px ;margin-left: -10px" >
                                <div class="col-12 h2" style="margin-left: -3px">用户登录</div>
                                <div class="offset-1 col-2 text-right">
                                    <label for="username">用户名:</label>
                                </div>
                                <div class="form-group col-7 text-left">
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <div class="utip" style="margin-left: -40px">*用户名必填</div>
                                <div class="offset-1 col-2 text-right">
                                    <label for="passwd">密码:</label>
                                </div>
                                <div class="form-group col-7 text-left">
                                    <input type="password" class="form-control input_len" id="passwd" name="passwd">
                                </div>
                                <div class="ptip" style="margin-left: -40px">*密码必填</div>
                                <div class="form-group col-12">
                                    <button class="btn btn-success login" type="button" >登录</button>
                                    <button class="btn btn-success"><a href="./regrister.php">注册</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="bootstrap-4.1.2-dist/js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.2-dist/js/bootstrap.min.js"></script>
<script src="./js/login.js"></script>
</body>
</html>