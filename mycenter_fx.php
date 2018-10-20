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
            <div class="row my_info">
                <div>
                    <img src="<?=$head ? $head : './images/1.jpg'?>" width="140px" height="120px">
                    <input type="hidden" name="head" value="<?= $head ?>">
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
                        <h5>我的分享</h5>
                    </div>
                </div>
                <div class="border_line"></div>
                <br>
                <div class="row my_info2">
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" name="title" class="form-control" placeholder="请输入标题" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div id="editor">
                            <p><?=$text?></p>
                        </div>
                        <textarea name="text" id="text" cols="30" rows="10" class="hide"><?=$text?></textarea>
                        <div>
                            <br>
                            <button class="btn add_fx" type="button">分享</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="http://unpkg.com/wangeditor/release/wangEditor.min.js"></script>
    <script>
        var E = window.wangEditor;
        // 创建一个编辑器
        var editor = new E('#editor');
        // 配置服务器端地址
        editor.customConfig.uploadImgServer = './upload.php?from=pc';
        //服务器端接收的文件名称
        editor.customConfig.uploadFileName = 'images[]';
        //内容同步
        var $text1 = document.querySelector('#text');
        editor.customConfig.onchange = function (html) {
            // 监控变化，同步更新到 textarea
            // $text1.val(html);
            $text1.value = html;
        };
        editor.create();
    </script>
    <script src="./js/mycenter.js"></script>
<?php
require('./footer.php');
?>