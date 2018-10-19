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
            <div class="row my_info" >
                <div>
                    <img src="./images/1.jpg">
                </div>
                <div><p>用户名</p></div>
            </div>
            <div class="row my_info3">
                <div>
                    <h4> <img src="images/内容.png">我的信息</h4>
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
                        <h5>密码修改</h5>
                    </div>
                </div>
                <div class="border_line"></div>
                <br>
                <div class="row my_info2">
                    <div class="container" style="margin-top: 30px;margin-bottom: 150px">
                        <form action="">
                            <div class="row">
                                <input type="hidden" name="aid" value="<?= $aid ?>">
                                <div class="offset-1 col-2 text-right">
                                    <label for="passwd_last">您的旧密码:</label>
                                </div>
                                <div class="form-group col-7 text-left">
                                    <input type="password" class="form-control input_len" id="passwd_last"
                                           name="passwd_last">
                                    <div class="aaa utip">旧密码不正确</div>
                                </div>
                                <div class="offset-1 col-2 text-right">
                                    <label for="passwd_new">输入新密码:</label>
                                </div>
                                <div class="form-group col-7 text-left">
                                    <input type="password" class="form-control input_len" id="passwd_new"
                                           name="passwd_new">
                                    <div class="aaa utip">密码格式错误</div>
                                </div>
                                <div class="offset-1 col-2 text-right">
                                    <label for="passwd_new2">确认新密码:</label>
                                </div>
                                <div class="form-group col-7 text-left">
                                    <input type="password" class="form-control input_len" id="passwd_new2"
                                           name="passwd_new2">
                                    <div class="aaa uaip">2次密码不一致</div>
                                </div>
                                <div class="col-10 text-center">
                                    <button class="btn btn-success updatemm" type="button" style="margin: 0">保存信息</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/mycenter.js"></script>
<?php
require('./footer.php');
?>