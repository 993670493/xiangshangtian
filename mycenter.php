<?php
require('./header.php');
?>
    <div style="opacity: 0.5;position: relative;text-align: center;">
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
                <div style="margin: 20px 30px 10px 30px;background-color: red">
                    <img src="./images/1.jpg" width="140px" height="130px">
                </div>
                <div class="text-center" style="position: absolute;bottom: 0;margin-left: 30px">
                    用户名
                </div>
            </div>
            <div style="width: 200px;height: 160px;background-color: white;margin-top: 50px">
                <div class="text-center h3" style="border-bottom: 1px solid #80b1e3">个人中心</div>
                <div class="text-center"><a href="./mycenter.php">个人基本信息</a></div>
                <div class="text-center"><a href="./mycenter_mm.php">修改密码</a></div>
                <div class="text-center"><a href="./mycenter_fx.php">分享</a></div>
                <div class="text-center"><a href="./mycenter_fx2.php">我的分享</a></div>
                <div class="text-center"><a href="./mycenter_pl.php">发表过的评论</a></div>
            </div>
        </div>
        <div class="float-left gerenxinxi">
            <div style="border-bottom: 1px solid #80b1e3;height: 40px" class="h3">
                个人基本信息
            </div>
            <div class="container" style="margin-top: 30px">
                <form action="">
                    <div class="row">
                        <div class="offset-1 col-2 text-right">
                            <label for="header">头像:</label>
                        </div>
                        <div class="form-group col-7 text-left">
                            <label for="header" class="header_aaa">
                                <img src="<?=$head ? $head : './images/1.jpg'?>" width="120px" height="120px">
                            </label>
                            <input type="file" class="form-control myheader" id="header" name="header" style="display: none">
                            <input type="hidden" name="head" value="<?=$head?>">
                        </div>
                        <div class="offset-1 col-2 text-right">
                            <label for="uname">姓名:</label>
                        </div>
                        <div class="form-group col-7 text-left">
                            <input type="text" class="form-control input_len" id="uname" name="uname">
                        </div>
                        <div class="offset-1 col-2 text-right">
                            <label for="passwd">用户名:</label>
                        </div>
                        <div class="form-group col-7 text-left">
                            <input type="password" class="form-control input_len" id="username" name="username">
                        </div>
                        <div class="offset-1 col-2 text-right">
                            <label for="passwd">电话:</label>
                        </div>
                        <div class="form-group col-7 text-left">
                            <input type="password" class="form-control input_len" id="tel" name="tel">
                        </div>
                        <div class="offset-1 col-2 text-right">
                            <label for="passwd">年龄:</label>
                        </div>
                        <div class="form-group col-7 text-left">
                            <input type="password" class="form-control input_len" id="age" name="age">
                        </div>
                        <div class="offset-1 col-2 text-right">
                            <label for="passwd">性别:</label>
                        </div>
                        <div class="input-group-text">
                            <input type="radio" aria-label="Radio" value="0" name="gender" checked>男
                            <input type="radio" aria-label="Radio" value="1" style="margin-left: 10px" name="gender">女
                        </div>
                        <div class="col-8 text-center">
                            <button class="btn btn-success">保存基本信息</button>
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