<html>
<body>
<p>Ievadiet savus identificēšanas datus:</p>

<form action="login.php" method="POST">
Lietotājvārds: <input type="text" name="username" required><br>
parole: <input type="text" name="password" required><br>
<input type="submit">
</form> 

<!--<p>Jau ir izveidota persona? Spiediet šeit: <a href="http://localhost/first_login/user.php">user</a></p>-->
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "09_09_2024";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "select `login`('$username', '$password')";
$conn->query($sql);

}
$conn->close();
?>