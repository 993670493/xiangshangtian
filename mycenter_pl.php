<?php
require('./header.php');
$sql = 'SELECT * FROM comment WHERE status = 1 and aid="'.$_SESSION['aid'].'"';
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
            <div class="row my_info">
                <div>
                    <img src="<?=$head ? $head : './images/1.jpg'?>" width="140px" height="120px">
                </div>
                <div><p><?=$username?></p></div>
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
                        <h5>我的评论</h5>
                    </div>
                </div>
                <div class="border_line"></div>
                <br>
                <div class="row my_info2">
                    <div class="classlest" style="margin-bottom: 500px">
                        <?php
                        foreach ($students as $k =>$stu){
                            echo '
                            <div>
                            <br>
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="'.($head?$head:'./images/1.jpg').'" alt="...">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading">'.$username.'</p>
                                    <p>'.$stu['text'].'</p>
                                    <a>'.$stu['addtime'].'发表</a>
                                </div>
                            </div>
                            <div class="del_share" title="删除评论">
                                <a href="#">
                                   <div data-pid="'.$stu['pid'].'" class="delete_pl" style="height: 15px;width: 15px">
                                </a>
                            </div>

                            
                        </div>
                            ';
                        }
                        ?>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/delete_pl.js"></script>
<?php
require('./footer.php');
?>