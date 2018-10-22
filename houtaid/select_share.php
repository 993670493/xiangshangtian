<?php
require('./top.php');
$sql = 'SELECT a.fid,a.texts,b.username,a.addtime FROM share as a,admin as b WHERE a.aid=b.aid and a.status = 1';
$r = $mydb->query($sql);
$students = $r->fetch_all(MYSQLI_ASSOC);
?>
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">
            评论信息表
        </div>
        <table class="layui-table  classlist">
            <colgroup>
                <col width="150">
                <col width="200">
                <col>
            </colgroup>
            <thead>
            <tr>
                <th>ID</th>
                <th>内容</th>
                <th>分享的用户名</th>
                <th>分享时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($students as $key => $stu) {
                echo '<tr>
              <th>'.$stu['fid'].'</th>
              <th class="fx_img">'.$stu['texts'].'</th>
              <th>'.$stu['username'].'</th>
              <th>'.$stu['addtime'].'</th>
              <th><A href="###" class="delete_share" data-fid="'.$stu['fid'].'">删除</A>
              </th>
            </tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
    <script src="./js/selec_share.js"></script>
<?php
require('./bottom.php')
?>