<?php
if (isset($_FILES['myimg'])){
    if( 0 == $_FILES['myimg']['error']){
        $res = move_uploaded_file(
            $_FILES['myimg']['tmp_name'],
            __DIR__."/images/".$_FILES['myimg']['name']
        );
        header('Location: /5/');
        exit;
    }
}