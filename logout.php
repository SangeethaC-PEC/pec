<?php
session_start();
unset($_SESSION["lu"]);
if(session_destroy())
{
header("Location: index.php");
}
?>