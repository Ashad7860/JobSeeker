<?php
if(!isset($_SESSION['Loggedin'])){
    session_start();
    session_unset();
    session_destroy();
    $_SESSION['Loggedin']=false;
    header("Location:../");
}
?>