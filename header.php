<?php
require './common/mysql.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>一起去黄山旅游网</title>
    <link rel="icon" href="./images/logo.png">
    <link rel="stylesheet" href="bootstrap-4.1.2-dist/css/bootstrap.min.css">
    <meta name=“viewport” content=“width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light logo">
    <img src="images/logo.png">
    <a class="navbar-brand nav_b" href="#">一起去黄山旅游网</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <?php
          if($_SESSION['aid']){
              ?>
              <li class="nav-item">
                  <a class="nav-link" href="#">头像</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">用户名</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">|</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="./logout.php">退出</a>
              </li>
              <?php
          }else{
              ?>
              <li class="nav-item">
                  <a class="nav-link" href="./login.php">登录</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">|</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="./regrister.php">注册</a>
              </li>
              <?php
          }
          ?>
            <li class="nav-item">
                <a class="nav-link" href="#">网上预定</a>
            </li>
        </ul>
    </div>
</nav>
<div class="nav_top">
    <div class="container nav_son">
        <div class="row">
            <div class="col-12 nav_back">
                <ul>
                    <li>
                        <a href="./index.php" class="nav_f">首页</a></li>
                    <li class="header_nav"><a href="#" class="nav_f">景区概括</a>
                        <div class="hide">
                            <h5>六大景区</h5>
                            <div>
                                <img src="images/nav1.jpg" class="nav_img">
                                <a href="./sone.php" class="nav_a">云谷景区</a>
                            </div>
                            <div>
                                <img src="images/nav2.jpg" class="nav_img">
                                <a href="./stwo.php" class="nav_a">松谷景区</a>
                            </div>
                            <div>
                                <img src="images/nav3.jpg" class="nav_img">
                                <a href="./sthree.php" class="nav_a">北海景区</a>
                            </div>
                            <div>
                                <img src="images/nav4.jpg" class="nav_img">
                                <a href="./sfour.php" class="nav_a">钓桥景区</a>
                            </div>
                            <div>
                                <img src="images/nav5.jpg" class="nav_img">
                                <a href="./sfive.php" class="nav_a">玉屏景区</a>
                            </div>
                            <div>
                                <img src="images/nav6.jpg" class="nav_img" style="margin-left: -18px">
                                <a href="./ssix.php" class="nav_a">观瀑楼</a>
                            </div>
                        </div>
                    </li>
                    <li class="header_nav"><a href="#" class="nav_f">旅游攻略</a>
                        <div class="hide1 container">
                            <div class="row" style="margin-left: -30px">
                                <div class="col-4">
                                    <div>
                                        <h5>宾馆酒店</h5>
                                        <p><a href="./thone.php">天都国际饭店</a></p>
                                        <p><a href="./thtwo.php">西海饭店</a></p>
                                        <p><a href="./ththree.php">北海宾馆</a></p>
                                        <p><a href="./thfour.php">黄山国际大酒店</a></p>
                                        <p><a href="./thfive.php">狮林大酒店</a></p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div>
                                        <h5>路线推荐</h5>
                                        <p><a href="./pathone.php">订制摄影游/休闲度假游</a></p>
                                        <p><a href="./pathtwo.php">自驾自助游/文化体验游</a></p>
                                        <p><a href="./paththree.php">家庭亲子游/银发养生游</a></p>
                                        <p><a href="./pathfour.php">经典体验游/婚纱蜜月游</a></p>
                                        <p><a href="./pathfive.php">师生科考游/徒步登山游</a></p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div>
                                        <h5>交通指南</h5>
                                        <p><a href="./guideone.php">景区换乘站点及价格一览</a></p>
                                        <p><a href="./guidetwo.php">黄山风景区长途客票在线查询、微信平台和购票网</a></p>
                                        <p><a href="./guidethree.php">黄山风景区南--北门汽车代驾、旅游直通车</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li><a href="#" class="nav_f">社区分享</a></li>
                    <li><a href="#" class="nav_f">个人中心</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>