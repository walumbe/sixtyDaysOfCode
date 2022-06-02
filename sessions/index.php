<?php
// A session is a way to store information to be used across multiple pages

// start session
session_start();

// set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["logged_in"] = "logged in";

echo "session variables are set";