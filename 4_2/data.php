<?php

function getFilesFromDir(){
    return scandir(__DIR__."/images/");
}