<?php
session_start();
$conn = new mysqli('viaduct.proxy.rlwy.net', 'root', 'IFLrEjePGAQPDdAIBDKzFMkgaMWKJjcq', 'railway', 43705);
if ($conn->connect_error){
    echo 'connection error';
    exit();
}else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        try {
            $stmt = $conn->prepare('INSERT INTO users(name, email ,password) values(?,?,?)');
            $stmt->bind_param('sss', $name, $email, $password);
            if ($stmt->execute()){
                $_SESSION['username'] = $name;
            }

        }catch(EXCEPTION $e){
            echo 'email already exist';
        }
    }
}

?>
