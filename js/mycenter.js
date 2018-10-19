window.onload=function () {
    uploadimg();
};
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