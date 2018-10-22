window.onload=function () {
  regrister();
};
function regrister() {
    let regrister = document.querySelector('.regrister');
    if (!regrister) return;
    regrister.onclick=function () {
        let data = '';
        //姓名必填 2-4汉字
        let username = document.querySelector('input[name="username"]');
        let reg_username = /^[\u4e00-\u9fa5]{2,4}$/;
        if (!reg_username.test(username.value)) {
            username.parentNode.nextElementSibling.classList.add('panduan2');
            username.focus();
            return false;
        } else {
            username.parentNode.nextElementSibling.classList.remove('panduan2');
            data = 'username=' + username.value;
        }
        let passwd = document.querySelector('input[name="passwd"]');
        let reg_passwd = /^\w{6,18}$/;
        if (!reg_passwd.test(passwd.value)) {
            passwd.parentNode.nextElementSibling.classList.add('panduan2');
            passwd.focus();
            return false;
        } else {
            passwd.parentNode.nextElementSibling.classList.remove('panduan2');
            data += '&passwd=' +passwd.value;

        }
        let tel = document.querySelector('input[name="tel"]');
        let reg_tel = /^1[3-9]\d{9}$/;
        if (!reg_tel.test(tel.value)) {
            tel.parentNode.nextElementSibling.classList.add('panduan2');
            tel.focus();
            return false;
        } else {
            tel.parentNode.nextElementSibling.classList.remove('panduan2');
            data += '&tel=' + tel.value;
        }
        let xhr = new XMLHttpRequest();
        xhr.open('POST', './reqsubmit.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(data);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let data = JSON.parse(xhr.responseText);
                console.log(data);
                if(data.r=='username_is_exist'){
                    document.querySelector('.utip').innerHTML='账号已存在';
                    document.querySelector('.utip').classList.add('panduan2');
                }
                if (data.r == 'ok') {
                    layer.confirm('注册成功', {
                        btn: [ '回到登录界面']
                    }, function (index) {
                        window.location.href = './login.php';
                    });
                } else {
                    alert('失败，请刷新后重新操作');
                }
            }
        }
    }
}