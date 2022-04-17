<form method="post">
    <label>Username</label>
    <input type="text" name="username">
    <label>Password</label>
    <input type="password" name="password">
    <br />
    <input type="submit" value="Submit">
</form>


<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == "host" && $_POST['password'] == "pass")
        echo "<div>Success</div>";
    else
        echo "<div>Failure</div>";
}
?>