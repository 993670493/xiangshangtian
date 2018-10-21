<?php
require('./top.php');
$sql = 'SELECT * FROM admin WHERE status = 1 and important=0';
$r = $mydb->query($sql);
$students = $r->fetch_all(MYSQLI_ASSOC);
?>
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">
            用户信息表
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
                <th>用户名</th>
                <th>姓名</th>
                <th>头像</th>
                <th>手机号</th>
                <th>性别</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $gender = [1=>'男', 2=>'女',0=>'未知'];
            foreach ($students as $key => $stu) {
                echo '<tr>
              <th>'.$stu['aid'].'</th>
              <th>'.$stu['username'].'</th>
              <th><img src="'.$stu['head'].'" class="layui-nav-img"></th>
              <th>'.$stu['uname'].'</th>
              <th>'.$stu['tel'].'</th>
              <th>'.$gender[$stu['gender']].'</th>
              <th><A href="###" class="delete_admin" data-aid="'.$stu['aid'].'">删除</A>
              </th>
            </tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
<?php
require('./bottom.php')
?>