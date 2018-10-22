window.onload=function () {
    delete_share();
};
function delete_share() {
    let delete_share = document.querySelector('.classlest');
    if(!delete_share) return ;
    let fid=0;
    delete_share.onclick=function (e) {
        if(e.target.classList.contains('delete_share')){
                    layer.confirm('是否确定删除？', {
            btn: ['确定', '取消']
        }, function (index, layero) {
            fid= e.target.dataset.fid;
            let data='';
            data = '&fid=' + fid;
            let xhr = new XMLHttpRequest();
            xhr.open('POST', './delete_share.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send(data);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    let data = JSON.parse(xhr.responseText);
                    console.log(data);
                    if (data.r == 'ok') {
                        window.location.href = './mycenterfirst.php';
                    } else {
                        alert('删除失败');
                    }
                }
            }
        }, function (index) {});
        }
    }
}