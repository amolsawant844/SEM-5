<?php

session_start();
$count=$_SESSION['count']+1;
$_SESSION['count']=$count;
echo "Hi there";

?>