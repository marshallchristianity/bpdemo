<?php
session_start();
if(session_destroy())
{
header("Location: indexer.php");
header("Location: index.php");

}
?>