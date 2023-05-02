<?php
$connect = mysqli_connect(
    'db', 
    'php_docker', 
    'password', 
    'php_docker' 
);

$email = $_POST['email'];
$pass = $_POST['pass'];
$sql = "INSERT INTO php_docker_table(email, pass) VALUES ('$email', '$pass');";
mysqli_query($connect, $sql);

header("Location: index.php?signup=success")
?>