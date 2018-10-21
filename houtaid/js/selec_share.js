window.onload = function () {
    delete_share();
};
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