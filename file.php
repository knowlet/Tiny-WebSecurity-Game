<?php

if(isset($_GET['name']))
{
    // the key is not here (troll)
    header("Content-type:application");
    header("Content-Length: " .(string)(filesize($_GET['name'])));
    header("Content-Disposition: attachment; filename=".$_GET['name']);
    readfile($_GET['name']);
}

?>
