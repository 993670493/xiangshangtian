<?php
require('./header.php');
?>
<div style="background-color: #eeeeee;height: 2000px">

<div class="container">
    <div class="row" >
        <div id="editor" class="offset-2 col-8">

        </div>
        <div class="offset-2 col-8">
            <span style="margin-top: 30px;">说点什么吧</span>
            <button class="btn btn-success float-right">发表</button>
        </div>
        <div class="offset-2 col-8" style="background-color: white">
            <div>
                <div style="display: flex">
                    <div>
                        <img src="./images/1.jpg" width="60px" height="60px">
                    </div>
                    <div>
                        <span>用户名</span><br>
                        <span>时间</span>
                    </div>
                </div>
                <div>
                    这里放文字这里放文字这里放文字这里放文字这里放文字这里放文字这里放文字这里放文字这里放文字这里放文字这里放文字这里放文字这里放文字
                </div>
                <div>
                    <img src="./images/2.jpg" width="200px" height="200px">
                </div>
                <form action="">
                    <div class="input-group mb-3" style="margin-top: 20px">
                        <input type="text" class="form-control" placeholder="评论">
                    </div>
                    <button class="btn btn-success float-right">发表</button>
                </form>
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