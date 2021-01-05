<?php

if(!(isset($_SESSION['uid'])) && $_SESSION['uid']!==$uid)
{
    header("Location: ../view/index.php");
}

?>