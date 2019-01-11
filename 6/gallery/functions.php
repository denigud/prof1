<?php

function getFile()
{
    return file(__DIR__."/data.txt", FILE_IGNORE_NEW_LINES);
}

function getUsersList()
{
    $lines = getFile();
    $users = [];
    foreach ($lines as $key => $value){
        if ($key % 2 == 0){
            $users[$value] =  $lines[$key+1];
        };
    };

    return $users;
}

function existsUser($login)
{
    $users = getUsersList();
    return key_exists($login, $users);
}

function сheckPassword($login, $password)
{
  if (existsUser($login)){
      $users = getUsersList();
      if(password_verify($password, $users[$login])) {
          return true;
      }else {
          return false;
      };
  }
  return false;
}

function getCurrentUser()
{
    return $_SESSION['user'];
}
