<?php
include __DIR__ . "/GuestBook.php";

if (isset($_POST['record']) && !empty($_POST['record'])) {
    $guestBook = new \GuestBook\GuestBook(__DIR__ . "/data.txt");
    $guestBook->append($_POST['record']);
    $guestBook->save(__DIR__ . "/data.txt", $guestBook->getData());
}
header('Location: /6/');
exit;