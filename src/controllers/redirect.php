<?php
if (!isset($_SESSION["regno"]))
{   
    header('location:signIn.php');
}