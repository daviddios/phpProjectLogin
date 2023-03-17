<?php
function logout(){
    echo 'im here';
session_unset();
session_destroy();
echo session_status();
$GLOBALS['loginBoolean'] = false;
header('Location: /phptest/login.php');
}
?>