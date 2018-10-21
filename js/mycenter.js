window.onload=function () {
    uploadimg();
    updateuser();
    updatemm();
    add_fx();
    add_pl();
    add_huifu();
};
function add_huifu() {
    let add_huifu=document.querySelector('.add_huifu');
    if(!add_huifu) return ;
    //  找到的回复按钮
    let aid = 0, pid = 0;
    let allcom= document.querySelector('#allcom');
    allcom.onclick =function (e) {
        let ccc=document.querySelector('input[name="aid"]').value;
        if(ccc==""){
            alert("请登录");
            window.location.href = './login.php';
            return;
        }
        console.log(1);
        if(e.target.classList.contains('replay')){
            aid= e.target.dataset.aid;
            pid= e.target.dataset.pid;
            console.log(aid,pid);
        }
    };

    add_huifu.onclick=function () {
        let data='';
        data += '&last_aid=' + aid;
        data += '&pid=' + pid;
        data += '&text_hf=' + document.querySelector('#text_hf').value;
        let xhr = new XMLHttpRequest();
        xhr.open('POST', './add_hf.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(data);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let data = JSON.parse(xhr.responseText);
                console.log(data);
                if (data.r == 'ok') {
                    alert('回复成功');
                    window.location.href = './fenxiang.php';
                } else {
                    alert('回复失败');
                }
            }
        }
    }
}
function add_pl() {
    let add_pl = document.querySelector('.add_pl');
    if(!add_pl) return ;
    add_pl.onclick=function () {
        let aid=document.querySelector('input[name="aid"]').value;
        if(aid==""){
            alert("请登录");
            window.location.href = './login.php';
            return;
        }
        let data='';
        data += '&fid=' + document.querySelector('input[name="fid"]').value;
        data += '&text=' + document.querySelector('#text').value;
        let xhr = new XMLHttpRequest();
        xhr.open('POST', './add_pl.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(data);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let data = JSON.parse(xhr.responseText);
                console.log(data);
                if (data.r == 'ok') {
                    alert('评论成功');
                    window.location.href = './fenxiang.php';
                } else {
                    alert('评论失败');
                }
            }
        }
    }
}
function add_fx() {
    let add_fx = document.querySelector('.add_fx');
    if(!add_fx) return ;
    add_fx.onclick=function () {
        let data='';
        data += '&title=' + document.querySelector('input[name="title"]').value;
        data += '&text=' + document.querySelector('#text').value;
        data += '&head=' + document.querySelector('input[name="head"]').value;
        let xhr = new XMLHttpRequest();
        xhr.open('POST', './add_fx.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(data);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let data = JSON.parse(xhr.responseText);
                console.log(data);
                if (data.r == 'ok') {
                    alert('分享成功');
                    window.location.href = './fenxiang.php';
                } else {
                    alert('分享失败');
                }
            }
        }
    }
}
function updatemm() {
    let updatemm = document.querySelector('.updatemm');
    if(!updatemm) return ;
    updatemm.onclick=function () {
        let data='';
        let passwd_new = document.querySelector('input[name="passwd_new"]');
        let reg_passwd_new = /^\w{6,18}$/;
        if (!reg_passwd_new.test(passwd_new.value)) {
            passwd_new.parentNode.nextElementSibling.classList.add('panduan2');
            passwd_new.focus();
            return false;
        } else {
            passwd_new.parentNode.nextElementSibling.classList.remove('panduan2');
            data = '&passwd_new=' +passwd_new.value;
        }
        let passwd_new2 = document.querySelector('input[name="passwd_new2"]');
        if (passwd_new2.value!=passwd_new.value) {
            document.querySelector('.uaip').classList.add('H');
            passwd_new2.focus();
            return false;
        } else {
            passwd_new2.parentNode.nextElementSibling.classList.remove('panduan2');
            data += '&passwd_new2=' +passwd_new2.value;
        }
        let passwd_last = document.querySelector('input[name="passwd_last"]');
        let reg_passwd_last = /^\w{6,18}$/;
        if (!reg_passwd_last.test(passwd_last.value)) {
            passwd_last.parentNode.nextElementSibling.classList.add('panduan2');
            passwd_last.focus();
            return false;
        } else {
            passwd_last.parentNode.nextElementSibling.classList.remove('panduan2');
            data += '&passwd_last=' +passwd_last.value;

        }
        let xhr = new XMLHttpRequest();
        xhr.open('POST', './updatemm.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(data);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let data = JSON.parse(xhr.responseText);
                console.log(data);
                if(data.r=='passwd_last'){
                    document.querySelector('.utip').innerHTML='旧密码不正确';
                    document.querySelector('.utip').classList.add('H');
                }
                if (data.r == 'ok') {
                    alert('修改成功');
                    window.location.href = './mycenter.php';
                } else {
                    alert('失败，请重新修改');
                }
            }
        }
    }
}

function uploadimg() {
    let myheader = document.querySelector('.myheader');
    if(!myheader) return ;
    let headerimg = document.querySelector('.header_aaa img');
    console.log(headerimg);
    //事件处理
    myheader.onchange = function(){
        console.log(this.files[0]);
        //把文件上传到服务器 AJAX 然后服务器返回一个图片地址
        let xhr = new XMLHttpRequest();
        xhr.open('POST', './uploads.php');
        //创建一个表单数据对象
        let formdata = new FormData();  //类似于写了一个表单  <form></form>
        formdata.append('myheader', this.files[0]);//<input name="myheader" type="file" files="this.files[0]">
        formdata.append('username', '小黑');
        xhr.send(formdata);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let data = JSON.parse(xhr.responseText);
                console.log(data.path);
                headerimg.src = data.path;
                // 修改图片地址的值
                document.querySelector('input[name="head"]').value = data.path;
            }
        }
    }
}

function updateuser() {
    let updateuser = document.querySelector('.updateuser');
    if (!updateuser) return;
    updateuser.onclick=function () {
        let data = 'aid=' + document.querySelector('input[name="aid"]').value;
        let uname = document.querySelector('input[name="uname"]');
        let reg_uname = /^[\u4e00-\u9fa5]{2,4}$/;
        if (!reg_uname.test(uname.value)) {
            uname.parentNode.nextElementSibling.classList.add('er');
            uname.focus();
            return false;
        } else {
            uname.parentNode.nextElementSibling.classList.remove('er');
            data += '&uname=' + uname.value;
        }
        let username = document.querySelector('input[name="username"]');
        let reg_username = /^[\u4e00-\u9fa5]{2,4}$/;
        if (!reg_username.test(username.value)) {
            username.parentNode.nextElementSibling.classList.add('er');
            username.focus();
            return false;
        } else {
            username.parentNode.nextElementSibling.classList.remove('er');
            data += '&username=' + username.value;
        }
        let tel = document.querySelector('input[name="tel"]');
        let reg_tel = /^1[3-9]\d{9}$/;
        if (!reg_tel.test(tel.value)) {
            tel.parentNode.nextElementSibling.classList.add('er');
            tel.focus();
            return false;
        } else {
            tel.parentNode.nextElementSibling.classList.remove('er');
            data += '&tel=' + tel.value;
        }
        let age = document.querySelector('input[name="age"]');
        let reg_age = /^\d{1,3}$/;
        if (!reg_age.test(age.value)) {
            age.parentNode.nextElementSibling.classList.add('er');
            age.focus();
            return false;
        } else {
            age.parentNode.nextElementSibling.classList.remove('er');
            data += '&age=' + age.value;

        }
        data += '&gender=' + document.querySelector('input[name="gender"]:checked').value;
        data += '&head=' + document.querySelector('input[name="head"]').value;
        let xhr = new XMLHttpRequest();
        xhr.open('POST', './updateuser.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(data);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let data = JSON.parse(xhr.responseText);
                console.log(data);
                if (data.r == 'ok') {
                    alert('保存成功');
                    window.location.href = './mycenterfirst.php';
                } else {
                    alert('失败，请重新修改');
                }
            }
        }
    }
}