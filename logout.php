<?php
session_start();
unset($_SESSION['username']);
session_destroy();

header("Location: index.php");

if(success)
{
        echo '<script language="javascript">';
        echo 'alert("Logged out!")';                      
        echo '</script>';
}
exit;
