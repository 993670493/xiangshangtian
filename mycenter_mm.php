<?php
require('./header.php');
?>
    <div style="opacity: 0.5;position: relative;text-align: center">
        <img src="./images/5.jpg" width="100%" height="800px">
    </div>
    <div class="container" style="position: absolute;top: 140px;left: 100px">
        <div class="row">
            <div class="col-12">
                <span>当前位置 : </span><span>首页</span> > <span>个人中心</span>
            </div>
        </div>
        <div class="float-left" style="width: 200px;margin-top: 100px;overflow: hidden">
            <div style="width: 200px;height: 180px;background-color: white;position: relative;overflow: hidden">
                <div style="margin: 20px 30px 10px 30px">
                    <img src="<?=$head ? $head : './images/1.jpg'?>" width="140px" height="120px">
                </div>
                <div class="text-center" style="position: absolute;bottom: 0;margin-left: 30px">
                    <?=$username?>
                </div>
            </div>
            <div style="width: 200px;height: 160px;background-color: white;margin-top: 50px">
                <div class="text-center h3" style="border-bottom: 1px solid greenyellow">个人中心</div>
                <div class="text-center"><a href="./mycenter.php">个人基本信息</a></div>
                <div class="text-center"><a href="./mycenter_mm.php">修改密码</a></div>
                <div class="text-center"><a href="./mycenter_fx.php">分享</a></div>
                <div class="text-center"><a href="./mycenter_fx2.php">我的分享</a></div>
                <div class="text-center"><a href="./mycenter_pl.php">发表过的评论</a></div>
            </div>
        </div>
        <div class="float-left gerenxinxi">
            <div style="border-bottom: 1px solid greenyellow;height: 40px" class="h3">
                密码修改
            </div>
            <div class="container" style="margin-top: 30px">
                <form action="">
                    <div class="row">
                        <input type="hidden" name="aid" value="<?=$aid?>">
                        <div class="offset-1 col-2 text-right">
                            <label for="passwd_last">您的旧密码:</label>
                        </div>
                        <div class="form-group col-7 text-left">
                            <input type="password" class="form-control input_len" id="passwd_last" name="passwd_last">
                            <div class="aaa utip">旧密码不正确</div>
                        </div>
                        <div class="offset-1 col-2 text-right">
                            <label for="passwd_new">输入新密码:</label>
                        </div>
                        <div class="form-group col-7 text-left">
                            <input type="password" class="form-control input_len" id="passwd_new" name="passwd_new">
                            <div class="aaa utip">密码格式错误</div>
                        </div>
                        <div class="offset-1 col-2 text-right">
                            <label for="passwd_new2">确认新密码:</label>
                        </div>
                        <div class="form-group col-7 text-left">
                            <input type="password" class="form-control input_len" id="passwd_new2" name="passwd_new2">
                            <div class="aaa uaip">2次密码不一致</div>
                        </div>
                        <div class="col-8 text-center">
                            <button class="btn btn-success updatemm" type="button">保存信息</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/mycenter.js"></script>
<?php
require('./footer.php');
?>