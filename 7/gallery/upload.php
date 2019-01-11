<?php
require_once __DIR__."/classes/Uploader.php";
use Uploader\Uploader;

if (isset($_FILES['myimg'])){
    $myUploader = new Uploader("myimg");
    if($myUploader->isUploaded()){
        $myUploader->upload();
    };
    header('Location: /7/');
    exit;
}
