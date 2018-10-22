window.onload=function () {
    delete_pl();
};
function delete_pl() {
    let delete_pl = document.querySelector('.classlest');
    if(!delete_pl) return ;
    let pid=0;
    delete_pl.onclick=function (e) {
        if(e.target.classList.contains('delete_pl')){
            pid= e.target.dataset.pid;
            layer.confirm('是否确定删除？', {
            btn: ['确定', '取消']
            }, function (index, layero) {
                  //获取自定义属性值得方法
                 let data='';
                data = '&pid=' + pid;
                let xhr = new XMLHttpRequest();
                xhr.open('POST', './delete_pl.php');
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.send(data);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        let data = JSON.parse(xhr.responseText);
                        console.log(data);
                        if (data.r == 'ok') {
                            window.location.href = './mycenter_pl.php';
                        } else {
                            alert('删除失败');
                        }
                    }
                }
              }, function (index) {});
        }
    }
}