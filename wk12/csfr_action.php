<?php
session_start();
?>

<form method="post">
    <label>Username</label>
    <input type="text" name="username">
    <label>Password</label>
    <input type="password" name="password">
    <br />
    <input type="submit" value="Submit">
</form>


<?php

// validate session value and post value
$isCSRFSafe = isset($_POST["confirmation"]) ? $_SESSION["confirmation"] == $_POST["confirmation"] : false;

if (isset($_POST['username']) && isset($_POST['password']) && $isCSRFSafe) {
    if ($_POST['username'] == "host" && $_POST['password'] == "pass")
        echo "<div>Success</div>";
    else
        echo "<div>Failure</div>";
}
?>