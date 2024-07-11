<?php

if ($_Server["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $passwrd = $_POST["passwrd"];
    $email = $_POST["email"];

    try{
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, passwrd, email) VALUES(?,?,?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $passwrd, $email]);

        $pdo = null;
        $stmt = null;

        header("Location: ../Home.html");

        die();
    }catch (PDOException $e) {
       dei("Query failed: " .$e->getMessage());
    }
} else {
    header("Location: ../Signup.html"); 
}