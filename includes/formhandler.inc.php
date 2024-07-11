<?php
include 'config.php'; // Include database connection settings

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwrd = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert user into database
    $sql = "INSERT INTO users (username, email, passwrd) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $passwrd);

    if ($stmt->execute()) {
        // Successful insertion
        echo "Success";
        header("Location: ../Home.html");
        exit();
    } else {
        // Insertion failed
        http_response_code(500);
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

