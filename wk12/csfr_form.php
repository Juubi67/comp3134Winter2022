<?php
session_start();

// set unique id as session value
$_SESSION["confirmation"] = uniqid();

?>

<form id="hidden_form" action="/csfr_action.php" method="post">
    <input type="hidden" name="username" value="host">
    <input type="hidden" name="password" value="pass">
    <input type="hidden" name="confirmation" value="<?php echo $_SESSION['confirmation']; ?>">
</form>
<script>
    window.addEventListener('load', function () {
        document.getElementById("hidden_form").submit()
    })

</script>