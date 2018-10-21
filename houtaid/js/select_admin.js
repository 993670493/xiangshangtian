window.onload = function () {
    delete_admin();
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
