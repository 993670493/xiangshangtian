window.onload = function () {
    delete_admin();
    delete_comment();
    delete_replay();
    delete_share();
};
function delete_admin() {
    let delete_admin = document.querySelector('.classlist tbody');
    if(!delete_admin) return;
    delete_admin.onclick = function (e) {
        if (e.target.classList.contains('delete_admin')) {
            layer.confirm('是否确定删除？', {
                btn: ['确定', '取消']
            }, function (index, layero) {
                //获取自定义属性值得方法
                let aid = e.target.dataset.aid;
                let xhr = new XMLHttpRequest();
                xhr.open('GET', './delete_admin.php?aid=' + aid);
                xhr.send();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        let data = JSON.parse(xhr.responseText);
                        if (data.r == 'ok') {
                            window.location.reload();
                        }
                    }
                }
            }, function (index) {});
        }
    }
}
function delete_comment() {
    let delete_comment = document.querySelector('.classlist tbody');
    if(!delete_comment) return;
    delete_comment.onclick = function (e) {
        if (e.target.classList.contains('delete_comment')) {
            layer.confirm('是否确定删除？', {
                btn: ['确定', '取消']
            }, function (index, layero) {
                //获取自定义属性值得方法
                let pid = e.target.dataset.pid;
                let xhr = new XMLHttpRequest();
                xhr.open('GET', './delete_comment.php?pid=' + pid);
                xhr.send();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        let data = JSON.parse(xhr.responseText);
                        if (data.r == 'ok') {
                            window.location.reload();
                        }
                    }
                }
            }, function (index) {});
        }
    }
}
function delete_replay() {
    let delete_replay = document.querySelector('.classlist tbody');
    if(!delete_replay) return;
    delete_replay.onclick = function (e) {
        if (e.target.classList.contains('delete_replay')) {
            layer.confirm('是否确定删除？', {
                btn: ['确定', '取消']
            }, function (index, layero) {
                //获取自定义属性值得方法
                let rid = e.target.dataset.rid;
                let xhr = new XMLHttpRequest();
                xhr.open('GET', './delete_replay.php?rid=' + rid);
                xhr.send();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        let data = JSON.parse(xhr.responseText);
                        if (data.r == 'ok') {
                            window.location.reload();
                        }
                    }
                }
            }, function (index) {});
        }
    }
}
function delete_share() {
    let delete_share = document.querySelector('.classlist tbody');
    if(!delete_share) return;
    delete_share.onclick = function (e) {
        if (e.target.classList.contains('delete_share')) {
            layer.confirm('是否确定删除？', {
                btn: ['确定', '取消']
            }, function (index, layero) {
                //获取自定义属性值得方法
                let fid = e.target.dataset.fid;
                let xhr = new XMLHttpRequest();
                xhr.open('GET', './delete_share.php?fid=' + fid);
                xhr.send();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        let data = JSON.parse(xhr.responseText);
                        if (data.r == 'ok') {
                            window.location.reload();
                        }
                    }
                }
            }, function (index) {});
        }
    }
}