<?php
include_once __DIR__."/Uploader.php";
use Uploader\Uploader;

if (isset($_FILES['myimg'])){
    $myUploader = new Uploader("myimg");
    if($myUploader->isUploaded()){
        $myUploader->upload();
    };
    header('Location: /6/gallery/');
    exit;
}
