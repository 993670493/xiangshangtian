window.onload = function () {
    delete_comment();
};
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
