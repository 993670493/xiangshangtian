<?php
require('./header.php');
    $sql='select b.head,b.username,a.title,a.texts,a.addtime,a.fid from share as a,admin as b where a.aid=b.aid ORDER by fid desc';
    $r = $mydb->query($sql);
    $stu = $r->fetch_array(MYSQLI_ASSOC);
    foreach ($stu as $key => $value) {
        $$key = $value;
    }
    $sql_fx='select d.head,f.text,d.username,f.addtime,f.pid,f.aid from comment as f,admin as d where f.aid=d.aid and f.fid="'.$fid.'"  ORDER by addtime desc';
    $gsd=$mydb->query($sql_fx);
    $stu_fx=$gsd->fetch_all(MYSQLI_ASSOC);
    foreach ($stu_fx as $k =>$v){
        $pid=$v['pid'];
        $sql_fx='select d.head,f.text_hf,d.username,f.addtime from reply as f,admin as d where f.aid=d.aid and f.pid='.$pid;
        $gsd=$mydb->query($sql_fx);
        $stu_fx[$k]['replay']=$gsd->fetch_all(MYSQLI_ASSOC);
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
                <input type="hidden" name="aid" value="<?= $aid ?>">
                <img src="<?= $head ? $head : './images/1.jpg' ?>" width="120px" height="120px">
                <a style="font-size: 20px;font-weight: bolder"><?=$username?></a>
            <div class="per_title text-center">
                <p><?=$title?></p>
            </div>
            <div class="per_content">
                <?=$texts?>
            </div>
            <br>
            <div class="per_comment">
                <div class='share_time'><?=$addtime?></div>
                <input type="hidden" name="aid" value="<?= $aid ?>">
                <input type="hidden" name="fid" value="<?= $fid ?>">
                <div class='comment_share'><button class='btn btn-success ' data-toggle='modal' data-target='#myModal' >评论</button>
                </div>
            </div>
            <div id="allcom">
                <?php
                foreach ($stu_fx as $key => $stu){
                    echo '
                    <hr>
                <br>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="'.$stu['head'].'" alt="">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">'.$stu['username'].'</h4>
                        <p>'.$stu['text'].'</p>
                        <p>'.$stu['addtime'].'发表</p>
                    </div>
                </div>
                <input type="hidden" name="last_aid" value="'.$stu['aid'].'">
                <input type="hidden" name="pid" value="'.$stu['pid'].'">
                <button class="btn btn-success  replay comment_com" data-aid="'.$stu['aid'].'" data-pid="'.$stu['pid'].'" type="button" data-toggle=\'modal\' data-target=\'#mM\' >回复</button>
                
                    ';
                    foreach ($stu['replay'] as $k=>$w){
                        echo '
                        <div>
                    <div class="media-left">
                        <img class="media-object" src="'.$w['head'].'" alt="">
                        &nbsp;&nbsp;'.$w['username'].'&nbsp;回复&nbsp;'.$stu['username'].'：&nbsp;'.$w['text_hf'].'
                    '.$w['addtime'].'
                    </div>
                </div>
                   ';
                    }
                }
                ?>
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
                    <h4 class="modal-title" id="myModalLabel">评论</h4>
                </div>
                <form action="">
                    <textarea class="modal-body pldt text" id="text" cols="64px"></textarea>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary add_pl" id="tjpl">提交评论</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--模态框结束-->
    <!-- 回复模态框（Modal） -->
    <div class="modal fade" id="mM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">回复</h4>
                </div>
                <textarea class="modal-body hfpl " id="text_hf" cols="80px"></textarea>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary add_huifu" id="tjhf">提交回复</button>
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
    <script src="./js/mycenter.js"></script>
<?php
require('./footer.php');
?>