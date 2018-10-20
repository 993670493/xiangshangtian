<?php
require('./header.php');

?>
    <div id="background_img">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <span>当前位置 : </span><span>首页</span> > <span>个人中心</span>
                </div>
            </div>
            <div class="row my_info">
                <div>
                    <img src="<?=$head ? $head : './images/1.jpg'?>" width="140px" height="120px">
                </div>
                <div><p><?=$username?></p></div>
            </div>
            <div class="row my_info3">
                <div>
                    <h4><img src="images/内容.png">我的信息</h4>
                </div>
                <div class="my_info3_son"><a href="./mycenter.php" style="margin-left: 10px">个人基本信息</a></div>
                <br>
                <div class="my_info3_son"><a href="./mycenter_mm.php" style="margin-left: 27px">修改密码</a></div>
                <br>
                <div class="my_info3_son"><a href="./mycenter_fx.php" style="margin-left: 43px">分享</a></div>
                <br>
                <div class="my_info3_son"><a href="./mycenter_pl.php" style="margin-left: 27px">我的评论</a></div>
            </div>
            <div class="my_info1">
                <div class="row">
                    <div>
                        <h5>个人基本信息</h5>
                    </div>
                </div>
                <div class="border_line"></div>
                <br>
                <div class="row my_info2">
                    <form action="">
                        <div class="row">
                            <input type="hidden" name="aid" value="<?= $aid ?>">
                            <div class="offset-1 col-2 text-right">
                                <label for="header">头像:</label>
                            </div>
                            <div class="form-group col-7 text-left">
                                <label for="header" class="header_aaa">
                                    <img src="<?= $head ? $head : './images/1.jpg' ?>" width="120px" height="120px">
                                </label>
                                <input type="file" class="form-control myheader" id="header" name="header"
                                       style="display: none">
                                <input type="hidden" name="head" value="<?= $head ?>">
                            </div>
                            <div class="offset-1 col-2 text-right">
                                <label for="uname">姓名:</label>
                            </div>
                            <div class="form-group col-7 text-left">
                                <input type="text" value="<?= $uname ?>" class="form-control input_len" id="uname"
                                       name="uname">
                            </div>
                            <div class="offset-1 col-2 text-right">
                                <label for="passwd">用户名:</label>
                            </div>
                            <div class="form-group col-7 text-left">
                                <input type="text" value="<?= $username ?>" class="form-control input_len" id="username"
                                       name="username">
                            </div>
                            <div class="offset-1 col-2 text-right">
                                <label for="tel">电话:</label>
                            </div>
                            <div class="form-group col-7 text-left">
                                <input type="text" value="<?= $tel ?>" class="form-control input_len" id="tel"
                                       name="tel">
                            </div>
                            <div class="offset-1 col-2 text-right">
                                <label for="age">年龄:</label>
                            </div>
                            <div class="form-group col-7 text-left">
                                <input type="text" value="<?= $age ?>" class="form-control input_len" id="age"
                                       name="age">
                            </div>
                            <div class="offset-1 col-2 text-right">
                                <label for="gender">性别:</label>
                            </div>
                            <div class="input-group-text">
                                <input type="radio" aria-label="Radio" value="0"
                                       name="gender" <?= $gender == 0 ? ' checked' : '' ?>>男
                                <input type="radio" aria-label="Radio" value="1"
                                       name="gender" <?= $gender == 1 ? ' checked' : '' ?> style="margin-left: 10px">女
                            </div>
                            <div class="col-8 text-center">
                                <button class="btn btn-success updateuser text-center" type="button" style="margin: 0">保存基本信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/mycenter.js"></script>
<?php
require('./footer.php');
?>