<?php

session_start();
$email = $_SESSION['email'];
echo $email;
$email_ar = [];
$password = $_POST['password'];
echo $password;
if ($password == '') {
    exit('Введите пароль');
}

require 'conn.php';

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    array_push($email_ar, $row['email']);  
}
if (in_array($email, $email_ar)) {
    echo "Вы уже зарегистрированны";
    
} else {
    $sql = "INSERT INTO users(email, password) VALUES(:email, :password)";
    $query = $pdo->prepare($sql);
   $query->execute(['email' => $email,'password' => $password]);   //регистрация
   echo 'Регистрация успешна';
}
?>