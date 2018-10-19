<?php
$file = explode('.', $_FILES['myheader']['name']);
$ext = array_pop($file);
$filename = './new_image/' . uniqid('img_') . '.' . $ext;
move_uploaded_file($_FILES['myheader']['tmp_name'], $filename);
echo json_encode(['path'=>$filename]);