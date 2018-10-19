<?php
require('./header.php');
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
            <div class="per_header">
                <img src="images/1.jpg">
                <a>用户名</a>
                <p>当时发送的时间</p>
            </div>
            <div class="per_content">
                10月16日，时至九月重阳，安徽黄山风景区进入秋色最佳观赏期。五颜六色、色彩斑斓的秋叶，点缀在千山万壑之间，犹如美术师打翻了调色板，浓墨重彩，色彩分明。近处怪石虬松，红树点点，五色纷披；远处银白色云海在群峰间起伏，霞光照耀，流光溢彩，美了黄山醉了游客。
                <img src="images/1.jpg">
            </div>
            <div>
                <input type="text" placeholder="评论">
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