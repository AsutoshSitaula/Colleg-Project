<?php
$username = 'root';
$password = '';
$database = 'anil';
$servername = 'localhost';
$mysqli = new mysqli(
    $servername,
    $username,
    $password,
    $database
);
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}
$sql = "SELECT * FROM account";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <section>
        <table>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>password</th>
            </tr>
            <?php
            while ($data = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><a href='delete.php?del=$row[id]'>delete</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </section>
</body>

</html>