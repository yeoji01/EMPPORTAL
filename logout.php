<?php

session_start();
session_destroy();
header('Location: index.php'); //call here the default page

?>