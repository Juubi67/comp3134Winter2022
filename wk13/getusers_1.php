<?php
require 'db_secrets.php';
?>
<html>

<body>
    <form action="getusers_1.php" method="GET">
        <label for="firstname">First name</label>
        <input type="text" name="firstname">
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET["firstname"])) {
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM users WHERE firstname = '" . $_GET["firstname"] . "' AND active = 1;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
    ?>
            <table border="1 black">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Active</th>
                <?php
                while ($row = $result->fetch_assoc()) {
                    printf("<tr> <td>%s</td> <td>%s</td> <td>%s</td> </tr>", $row["firstname"], $row["lastname"], $row["active"]);
                }
                ?>
            </table>
    <?php

        } else
            echo "No results found. <br>";
    }

    ?>
</body>

</html>