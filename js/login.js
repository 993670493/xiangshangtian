window.onload=function () {
    document.querySelector('.login').onclick=function () {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', './loginsubmit.php');
        var formdata = new FormData();
        formdata.append('username', document.querySelector('input[name="username"]').value);
        formdata.append('passwd', document.querySelector('input[name="passwd"]').value);
        xhr.send(formdata);
        xhr.onreadystatechange=function () {
            if(xhr.readyState==4&&xhr.status==200){
                var data=JSON.parse(xhr.responseText);
                console.log(data);
                if(data.r=='username_not_exist'){
                    document.querySelector('.utip').innerHTML='账号不存在';
                    document.querySelector('.utip').classList.add('er');
                }
                if(data.r=='passwd_err'){
                    document.querySelector('.ptip').innerHTML='密码不正确';
                    document.querySelector('.ptip').classList.add('er');
                    document.querySelector('.utip').classList.remove('er');
                }
                if (data.r == 'ok') {
                    layer.confirm('登录成功', {
                        btn: [ '前往主页面']
                    }, function (index) {
                        window.location.href = './index.php';
                    });
                }
            }
        }
    }
};