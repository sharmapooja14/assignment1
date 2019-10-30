<?php

include 'config.php';

$id = $_GET['id'];

$q = " DELETE FROM `registration_form` WHERE id = $id ";

mysqli_query($con, $q);

header('location:uploadrecord.php');

?>