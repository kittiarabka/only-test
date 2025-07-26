<?php 
session_start();
require_once 'connect.php';

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password !== $password_confirm) {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../registration.php');
    exit();
}

$result_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email`='$email'");
if (mysqli_num_rows($result_email) > 0) {
    $_SESSION['message'] = 'Этот email уже зарегистрирован';
    header('Location: ../registration.php');
    exit();
}

$result_number = mysqli_query($connect, "SELECT * FROM `users` WHERE `number`='$number'");
if (mysqli_num_rows($result_number) > 0) {
    $_SESSION['message'] = 'Этот номер телефона уже зарегистрирован';
    header('Location: ../registration.php');
    exit();
}

$result_name = mysqli_query($connect, "SELECT * FROM `users` WHERE `name`='$name'");
if (mysqli_num_rows($result_name) > 0) {
    $_SESSION['message'] = 'Это имя уже занято';
    header('Location: ../registration.php');
    exit();
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `number`, `email`, `password`) VALUES (NULL, '$name', '$number', '$email', '$hashed_password')");

$_SESSION['message'] = 'Регистрация прошла успешно';
header('Location: ../login.php');
exit();
?>
