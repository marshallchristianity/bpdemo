<?php
$link = mysqli_connect('localhost', 'bigperluser','bigperlpwd','bigperldb');
if (!$link) {
    die('Not connected : ' . mysql_error());
}
?>