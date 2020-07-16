<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["loggedin"]);
$location="/fwdfrontendpartofinternship/index.html";
header("Location:"."http://".$_SERVER['HTTP_HOST'].$location);
?>