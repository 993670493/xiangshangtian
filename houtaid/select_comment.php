<?php
require('./top.php');
$sql = 'SELECT a.pid,a.text,b.username,h.title,a.addtime,b.head FROM comment as a,admin as b,share as h  WHERE a.aid=b.aid and a.status = 1';
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
                <th>评论的用户名</th>
                <th>评论的分享名</th>
                <th>评论时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($students as $key => $stu) {
                echo '<tr>
              <th>'.$stu['pid'].'</th>
              <th>'.$stu['text'].'</th>
              <th>'.$stu['username'].'</th>
              <th>'.$stu['title'].'</th>
              <th>'.$stu['addtime'].'</th>
              <th><A href="###" class="delete_comment" data-pid="'.$stu['pid'].'">删除</A>
              </th>
            </tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
    <script src="./js/select_comment.js"></script>

<?php
require('./bottom.php')
?>