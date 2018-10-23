<?php
require('./header.php');
$sql = 'SELECT a.fid,a.texts,b.username,a.addtime,b.head,a.title FROM share as a,admin as b WHERE a.aid=b.aid and a.status = 1 order by addtime desc';
$r = $mydb->query($sql);
$students = $r->fetch_all(MYSQLI_ASSOC);
?>
    <div id="background_imgfx">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-5">
                    <h3 style="color:white;">最新动态分享</h3>
                </div>
            </div>
        </div>
        <div class="container sharelist_back">
            <?php
            foreach ($students as $key => $stu) {
                echo '
            <br>
    <div class="row per_info5">
        <div class="col-4 list_left"><img src="'. ($stu['head']?$stu['head']:'./images/1.jpg').'"></div>
        <div class="col-8 list_right">
            <div class="list_title">
                <a href="./fenxiang.php?fid=' . $stu['fid'] . '"><h4>' . $stu['title'] . '</h4></a>
            </div>
            <div class="list_content yingcang">
                <p>' . $stu['texts'] . '</p>
            </div>
        </div>
    </div>
    <hr>
            ';
            }
            ?>
        </div>
    </div>
<?php
require('./footer.php');
?>