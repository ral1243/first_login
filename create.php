<html>
<body>
<p>Ievadiet savus identificēšanas datus:</p>

<form action="create.php" method="POST">
Vārds: <input type="text" name="name" required><br>
Uzvārds: <input type="text" name="fname" required><br>
Lietotājvārds: <input type="text" name="username" required><br>
parole: <input type="text" name="password" required><br>
<input type="submit">
</form> 

<p>Jau ir izveidots akounts? Spiediet šeit: <a href="http://localhost/first_login/login.php">user</a></p>-
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
$personex = "login.php";
$name = $_POST["name"];
$fname = $_POST["fname"];
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "call `fun_create_person`('$name', '$fname')";
$conn->query($sql);
$sql = "call `fun_create_user`('$username', '$password', '$name', '$fname')";
$conn->query($sql);

}
$conn->close();
?>