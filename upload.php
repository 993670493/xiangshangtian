<?php
$imglist = ["errno"=>0,"data"=>[]];
foreach ($_FILES["images"]["tmp_name"] as $k => $tmp) {
    $file = explode('.', $_FILES['images']['name'][$k]);
    $ext = array_pop($file);
    $filename = './new_image/'. uniqid('img_') . '.' . $ext;
    move_uploaded_file($tmp, $filename);
    //把图片地址追加到数组里面去
    array_push($imglist['data'], 'http://localhost/xiangmu'.$filename);
}
echo json_encode($imglist);

