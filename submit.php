<?php
if (isset($_POST['name']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $entry = $name . ": " . $message . "\n";
    file_put_contents('messages.txt', $entry, FILE_APPEND);
}
header('Location: index.php');
?>
