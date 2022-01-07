<?php

$host = "localhost";
$user = "postgres";
$pass = "root";
$db = "mydata";


   
    try {
        $dsn = "pgsql:host=$host;port=8080;dbname=$db;";
        // make a database connection
        $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        if ($pdo) {
            echo "Connected to the $db database successfully!";
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    } finally {
        if ($pdo) {
            $data = [
                'username' => $_POST['username'],
                'pwd' => $_POST['pwd'],
                'confirm_pwd' => $_POST['confirm_pwd']
            ];
            $sql = "INSERT INTO usuario (username, pwd, confirm_pwd) VALUES (:username, :pwd, :confirm_pwd)";
            $stmt= $pdo->prepare($sql);
            $stmt->execute($data);

            echo '<pre>'; print_r($_POST); echo '</pre>';

            $pdo = null;
        }
    }

