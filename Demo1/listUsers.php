<?php
// $_SESSION["user"] = $username;
$conn = new mysqli('localhost', 'root', '', 'demo1');
$query = "SELECT*FROM user";
$index = $conn->query($query);
while ($row = mysqli_fetch_assoc($index)) {
    echo "User name: " . $row['username'] . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="checkSession.php">
            <button type="submit" class="btn btn-primary">Log out</button>
        </form>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>