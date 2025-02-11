<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
      padding: 0;
      margin: 0;
    }
    html,body {
        height:100%;
        width: 100%;
        background-color:skyblue;
        align-items: center;
        text-align: center;
        justify-content: center;
        display: flex;
        flex-direction:column;
    }
    body {
        background-image: url('https://images.unsplash.com/photo-1738683987582-b52d371d2782?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxMnx8fGVufDB8fHx8fA%3D%3D');
        font-weight:900;
        font-size:30px;
        color:white;
    }
    .container {
        height:40%;
        width: 40%;
        align-items: center;
        text-align: center;
        justify-content: center;
        display: flex;
    }
    .l {
        height:10vh;
        width: 15vw;
        background-color: orange;
        border-radius:20px;
        align-items: center;
        text-align: center;
        justify-content: center;
        display: flex;
    }
</style>
<body>
<?php
session_start();
if (isset($_SESSION['username'])){
    echo "welcome  MR " . $_SESSION['username'];
}else {
    header('location:login.html');
}
?>
<div class="container">
    <a href="logout.php"><div class="l">LOGOUT</div></a>
</div>
</body>
</html>