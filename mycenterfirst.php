<?php
require('./header.php');
$sql = 'SELECT a.fid,a.texts,b.username,a.addtime,b.head,a.title FROM share as a,admin as b WHERE a.aid=b.aid and a.status = 1 and a.aid="' . $_SESSION['aid'] . '" order by addtime desc ';
$r = $mydb->query($sql);
$students = $r->fetch_all(MYSQLI_ASSOC);
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
                <img src="<?= $head ? $head : './images/1.jpg' ?>" width="140px" height="120px">
            </div>
            <div class="per_username"><p><?= $username ?></p></div>
        </div>
        <div class="per_back2">
            <br>
            <div class="row per_info1">
                <h4><img src="images/内容.png">个人信息</h4>
                <div class="per_con1">
                    <div class="col-4" style="margin-left: 80px;height: 60px">
                        <div class="per_one"><img src="images/姓名.png"><?= $uname ?></div>
                        <br>
                        <?php
                        $gender = [0 => '男', 1 => '女'];
                        ?>
                        <div class="per_one"><img src="images/性别.png"><?= $gender[$stu['gender']] ?></div>
                    </div>
                    <div class="col-4" style="margin-left: 370px;margin-top: -61px;height: 60px">
                        <div class="per_one"><img src="images/电话.png"><?= $tel ?></div>
                        <br>
                        <div class="per_one"><img src="images/年龄.png"><?= $age ?></div>
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
                        上传头像，完善资料！
                    </div>
                    <div class="per_con3"><a href="./mycenter.php" style="margin-left: 12px">完善个人资料</a></div>
                </div>
                <div class="col-3 per_con2 ">
                    <img src="images/拍照.png">
                    <div>这儿潜伏着哪些旅行大神？
                        他们都怎么玩儿？
                    </div>
                    <div class="per_con3"><a href="./mycenter_fx.php" style="margin-left: 12px">分享美景心请</a></div>
                </div>
                <div class="col-3 per_con2 ">
                    <img src="images/评论.png">
                    <div>这里有五花八门的评论，
                        各路奇葩事情百出。
                    </div>
                    <div class="per_con3"><a href="./mycenter_pl.php" style="margin-left: 30px">吐槽点评</a></div>
                </div>
            </div>
            <h4 class="text-center">我的分享</h4>
            <div class="container sharelist_back classlest">
                <?php
                foreach ($students as $key => $stu) {
                    echo '
            <br>
    <div class="row per_info5">
        <div class="col-4 list_left"><img src="' . $stu['head'] . '"></div>
        <div class="col-8 list_right">
            <div class="list_title">
                <a href="./fenxiang.php?fid=' . $stu['fid'] . '"><h4>' . $stu['title'] . '</h4></a>
            </div>
            <div class="list_content yingcang">
                <p>' . $stu['texts'] . '</p>
            </div>
        </div>
        <div class="del_share">
                 <a href="#"><img src="images/del.png" data-fid="'.$stu['fid'].'" class="delete_share"></a>
         </div>   
    </div>
    <hr>
            ';
                }
                ?>
            </div>
    </div>
    <script src="./js/delete_share.js"></script>
<?php
require('./footer.php');
?>