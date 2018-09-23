<?php
session_start();


if($_SESSION['customer'] !=""){
    session_destroy();
    header('Location:index');
}
elseif($_SESSION['admin']){
    session_destroy();
    //unset($_SESSION['administrator']);
    header('Location:login');
}
elseif($_SESSION['vendor']){
    session_destroy();
    header('Location:login');
}

?>