<?php
include "connect.php";
if (isset($_POST['submit'])) {
    $ism = $_POST['ism'];
    $email = $_POST['email'];
    $telefon = $_POST['tele'];
    $xabar = $_POST['xabar'];

    $sql = "INSERT INTO messages (ism, email, telefon, xabar) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {

        $stmt->bind_param("ssss", $ism, $email, $telefon, $xabar);
        if ($stmt->execute()) {
            header("Location: index.php");
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
