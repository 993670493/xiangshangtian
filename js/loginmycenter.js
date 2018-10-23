window.onload=function () {
    loginmycenter();
};
function loginmycenter() {
    let loginmycenter = document.querySelector('.loginmycenter');
    if(!loginmycenter) return ;
    loginmycenter.onclick=function () {
            layer.confirm('请登录', {
                btn: ['确定', '取消']
            }, function (index, layero) {
                window.location.href = './login.php';
            }, function (index) {});
    }
}