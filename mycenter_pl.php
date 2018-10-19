<?php
require('./header.php');
?>
    <div style="opacity: 0.5;position: relative;text-align: center">
        <img src="./images/5.jpg" width="100%" height="800px">
    </div>
    <div class="container" style="position: absolute;top: 140px;left: 100px">
        <div class="row">
            <div class="col-12">
                <span>当前位置 : </span><span>首页</span> > <span>个人中心</span>
            </div>
        </div>
        <div class="float-left" style="width: 200px;margin-top: 100px;overflow: hidden">
            <div style="width: 200px;height: 180px;background-color: white;position: relative;overflow: hidden">
                <div style="margin: 20px 30px 10px 30px">
                    <img src="<?=$head ? $head : './images/1.jpg'?>" width="140px" height="120px">
                </div>
                <div class="text-center" style="position: absolute;bottom: 0;margin-left: 30px">
                    <?=$username?>
                </div>
            </div>
            <div style="width: 200px;height: 160px;background-color: white;margin-top: 50px">
                <div class="text-center h3" style="border-bottom: 1px solid greenyellow">个人中心</div>
                <div class="text-center"><a href="./mycenter.php">个人基本信息</a></div>
                <div class="text-center"><a href="./mycenter_mm.php">修改密码</a></div>
                <div class="text-center"><a href="./mycenter_fx.php">分享</a></div>
                <div class="text-center"><a href="./mycenter_fx2.php">我的分享</a></div>
                <div class="text-center"><a href="./mycenter_pl.php">发表过的评论</a></div>
            </div>
        </div>
        <div class="float-left gerenxinxi">
            <div style="border-bottom: 1px solid greenyellow;height: 40px" class="h3">
                我的评论
            </div>
            <div>
                <div class="float-left" style="margin-left: 10px;width: 80px">
                    头像
                </div>
                <div class="float-left" style="border: 1px solid #cccccc;overflow: hidden">
                    <div class="mypinglun" style="border: 1px solid #cccccc;width: 650px">
                        第一次因为匆忙，在我们当地报的团，行程赶鸭子，为了省出时间来进购物店，连精华景点都没玩到，想着气就不打一处来！
                    </div>
                    <div>
                        <span>评论时间</span>
                        <button class="btn btn-success float-right">删除</button>
                    </div>
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