window.onload = function () {
    delete_replay();
};
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