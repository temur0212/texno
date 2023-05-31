<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fikrlar</title>
    <style>
        body
        {
            background-color:antiquewhite ;
        }
        table, th, td {
  border:2px solid black;
  width: 1400px;
  height: 100px;
}
    </style>
</head>
<body>
    
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yangiliklar";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM messages";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table class='table'>";
    echo "<thead class='thead-light'><tr><th scope='col'>Ism</th><th scope='col'>Email</th><th scope='col'>Telefon</th><th scope='col'>Xabar</th></tr></thead>";
    echo "<tbody>";
    
    while ($row = $result->fetch_assoc()) {
        $ism = $row['ism'];
        $email = $row['email'];
        $telefon = $row['telefon'];
        $xabar = $row['xabar'];
    
        echo "<tr>";
        echo "<td>$ism</td>";
        echo "<td>$email</td>";
        echo "<td>$telefon</td>";
        echo "<td>$xabar</td>";
        echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>"; 


    
} else {
    echo "No data found.";
}
$conn->close();
?> 