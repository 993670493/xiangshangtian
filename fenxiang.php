<?php
require('./header.php');
    $sql='select b.head,b.username,a.title,a.texts,a.addtime from share as a,admin as b where a.aid=b.aid ORDER by fid desc';
    $r = $mydb->query($sql);
    $stu = $r->fetch_array(MYSQLI_ASSOC);
    foreach ($stu as $key => $value) {
        $$key = $value;
    }
?>
<div style="background-color: #eeeeee;height:100%">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-5">
                <h3>最新动态分享</h3>
            </div>
        </div>
    </div>
<div class="container" id="share_back">
    <div class="row per_info4">
        <div>
            <br>
            <div class="per_header">
                <img src="<?= $head ? $head : './images/1.jpg' ?>" width="120px" height="120px">
                <a style="font-size: 20px;font-weight: bolder"><?=$username?></a>
            <div class="per_name">
              <h4><?=$username?></h4>
            </div>
            <div class="per_title text-center">
                <p><?=$title?></p>
            </div>
            <div class="per_content">
                <?=$texts?>
            </div>
            <br>
            <div class="per_comment">
                <div class='share_time'><?=$addtime?></div>
                <div class='comment_share'><button class='btn btn-success ' data-toggle='modal' data-target='#myModal' >评论</button>
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
                        <p>4楼&nbsp;&nbsp;2017-08-08&nbsp;&nbsp;23:15发表</p>
                    </div>
                </div>
                <div class='comment_com'><button class='btn btn-success hf' data-toggle='modal' data-target='#mM' >回复</button>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
    <div class="text-center">
        <button class="btn btn-default btn-block">查看更多</button>
    </div>
    <!-- 评论模态框（Modal） -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">评论</h4>
                </div>
                <textarea class="modal-body pldt" cols="80px"></textarea>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary" id="tjpl">提交评论</button>
                </div>
            </div>
        </div>
    </div>
    <!--模态框结束-->

    <!-- 回复模态框（Modal） -->
    <div class="modal fade" id="mM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">回复</h4>
                </div>
                <textarea class="modal-body hfpl" cols="80px"></textarea>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary" id="tjhf">提交回复</button>
                </div>
            </div>
        </div>
    </div>
    <!--模态框结束-->
</div>

    <script src="http://unpkg.com/wangeditor/release/wangEditor.min.js"></script>
    <script>
        var E = window.wangEditor;
        // 创建一个编辑器
        var editor = new E('#editor');
        // 配置服务器端地址
        editor.customConfig.uploadImgServer = './editorupload.php?from=pc';
        //服务器端接收的文件名称
        editor.customConfig.uploadFileName = 'images[]';
        //内容同步
        var $text1 = document.querySelector('#info');
        editor.customConfig.onchange = function (html) {
            // 监控变化，同步更新到 textarea
            // $text1.val(html);
            $text1.value = html;
        };
        editor.create();
    </script>
<?php
require('./footer.php');
?>