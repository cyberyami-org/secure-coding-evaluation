<?php
if ($_POST['username'] === "admin" && $_POST['password'] === "password") {
	    echo "Login";
    } else {
	    echo "Login Failed";
    }
?>
