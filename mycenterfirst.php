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
        <div class="row per_back1">
                <div>
                    <img src="<?=$head ? $head : './images/1.jpg'?>" width="140px" height="120px">
                </div>
                <div class="per_username"><p><?=$username?></p></div>
        </div>
        <div class="per_back2">
            <br>
            <div class="row per_info1">
                <h4><img src="images/内容.png">个人信息</h4>
                <div class="per_con1">
                    <div  class="col-4" style="margin-left: 80px;height: 60px">
                       <div class="per_one"><img src="images/姓名.png"><?=$uname?></div>
                        <br>
                        <?php
                        $gender = [0 => '男', 1 => '女'];
                        ?>
                        <div class="per_one"><img src="images/性别.png"><?= $gender[$stu['gender']] ?></div>
                    </div>
                    <div class="col-4"  style="margin-left: 370px;margin-top: -61px;height: 60px">
                        <div class="per_one"> <img src="images/电话.png"><?=$tel?></div>
                        <br>
                        <div class="per_one"><img src="images/年龄.png"><?=$age?></div>
                    </div>

                </div>
            </div>
            <div class="row per_info2">
                <div class="col-12">
                    <h4>Hi！</h4>
                    <p>这里是记录你的旅行记忆~</p>
                </div>
                <div class="col-3 per_con2 ">
                    <img src="images/信息.png">
                    <div>做一个有“有头有脸”的人
                        上传头像，完善资料！</div>
                    <div class="per_con3"><a href="./mycenter.php" style="margin-left: 12px">完善个人资料</a></div>
                </div>
                <div class="col-3 per_con2 ">
                    <img src="images/拍照.png">
                    <div>这儿潜伏着哪些旅行大神？
                        他们都怎么玩儿？</div>
                    <div class="per_con3"><a href="./mycenter_fx.php" style="margin-left: 12px">分享美景心请</a></div>
                </div>
                <div class="col-3 per_con2 ">
                    <img src="images/评论.png">
                    <div>这里有五花八门的评论，
                        各路奇葩事情百出。</div>
                    <div class="per_con3"><a href="./mycenter_pl.php" style="margin-left: 30px">吐槽点评</a></div>
                </div>
            </div>
            <div class="row per_info3">
                <div>
                    <br>
                    <div class="per_header">
                        <img src="<?=$head ? $head : './images/1.jpg'?>" width="140px" height="120px">
                        <a style="font-size: 20px;font-weight: bolder"><?=$username?></a>
                    </div>
                    <div class="per_title text-center">
                        <p>标题</p>
                    </div>
                    <div class="per_content">
                        10月16日，时至九月重阳，安徽黄山风景区进入秋色最佳观赏期。五颜六色、色彩斑斓的秋叶，点缀在千山万壑之间，犹如美术师打翻了调色板，浓墨重彩，色彩分明。近处怪石虬松，红树点点，五色纷披；远处银白色云海在群峰间起伏，霞光照耀，流光溢彩，美了黄山醉了游客。
                    </div>
                    <br>
                    <div class="per_comment">
                        <div class='share_time'>发表动态时间</div>
                        <div class='del_share'>
                           <a href="#"><img src="images/删除.png"></a>
                        </div>
                    </div>
                </div>
                <div>
                    <hr>
                    <br>
                    <div class="media">
                        <div class="media-left">
                            <img class="media-object" src="images/1.jpg" alt="...">
                        </div>
                        <div class="media-body">
                            <p class="media-heading">小明</p>
                            <p>有来过，666666。</p>
                            <a>4楼&nbsp;&nbsp;2017-08-08&nbsp;&nbsp;23:15发表</a>
                            <button class='btn btn-success hf comment_com' data-toggle='modal' data-target='#mM' >回复</button>
                        </div>
                    </div>
                    <div class='del_share'>
                        <a href="#"><img src="images/删除.png"></a>
                    </div>
                    <hr>
                </div>
            </div>
            </div>
        </div>
</div>
    <script src="./js/mycenter.js"></script>
<?php
require('./footer.php');
?>