<?php
$valid_password = [
    '123456', '123456789', 'qwerty', 'password', '111111',
    '12345678', 'abc123', '1234567', 'password1', '12345'
];

if (isset($_POST['password']) && in_array($_POST['password'], $valid_password)) {
?>
    <h1>Welcome <?php echo $_POST['username']; ?> to Your Portal</h1>
<?php
} else {
?>
    <h1>Weak Password</h1>
    <form method="post">
        <input type="hidden" name="username" value="user" />
        <label>Password</label>
        <input type="password" name="password">
        <br />
        <input type="submit">
    </form>

<?php
}
?>