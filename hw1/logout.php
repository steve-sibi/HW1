<?php
session_start();    // resume session
// if session still has same ID, unset it and clear session ID.
if(isset($_SESSION['userlogin']))
{
    unset($_SESSION['userlogin']);         // clear session ID
    header("Location: index.php");  // redirect to landing page
    die();  // end process
}

