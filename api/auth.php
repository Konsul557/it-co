<?php

require 'conn.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$email_ar = [];
$pas_ar = [];

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    array_push($email_ar, $row['email']);  
    array_push($pas_ar, $row['password']);  

}
if (in_array($email, $email_ar) and in_array($password, $pas_ar)) {
    $_SESSION['email'] = $email;
    echo $email;
    echo '|';
    echo $password;
} else {
    echo 'Неверный логин или пароль';
}