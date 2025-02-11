<?php
session_start();
$conn = new mysqli('viaduct.proxy.rlwy.net', 'root', 'IFLrEjePGAQPDdAIBDKzFMkgaMWKJjcq', 'railway', 43705);
if ($conn->connect_error){
    echo 'connection error';
    exit();
}else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param('s', $email);
        if ($stmt->execute()){
            $result = $stmt->get_result();
            if ($result->num_rows > 0){
                $row = $result->fetch_assoc();
                if ($password === $row['password']){
                    $_SESSION['username'] = $row['name'];
                    header('location: welcome.php');
                }else {
                    echo 'password is not valid';
                }

            }else {
                echo 'Invalid email';
            }
        }


    }
}


?>
