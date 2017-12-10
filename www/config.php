<?php

$con = mysqli_connect("db.cs.dal.ca", "bli", "B00692240", "bli");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>