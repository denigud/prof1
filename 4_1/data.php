<?php
function getLinesOfFile(){
    return file(__DIR__."/data.txt", FILE_IGNORE_NEW_LINES);
};
