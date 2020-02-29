<?php
if(isset($_SESSION['userlogin']))
{
    unset($_SESSION['userlogin']);
}
header("Location: index.php");
