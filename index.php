<?php
session_start();
$_SESSION["username"] = "kreebers";
$_SESSION["age"] = 56;
echo "Hi, " . $_SESSION["username"];
session_destroy();
