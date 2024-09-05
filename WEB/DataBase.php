<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "test");

$result = mysqli_query($link, "SELECT DATABASE()");
$row = mysqli_fetch_row($result);
printf("Default database is %s.\n");
?>