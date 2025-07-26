<script src="https://smartcaptcha.yandexcloud.net/captcha.js" defer></script>

<?php 
session_start();
require_once 'connect.php';

if (isset($_POST['email_or_number'])) {
    $input = $_POST['email_or_number'];
} else {
    $input = ''; 
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
} else {
    $password = ''; 
}

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE (email = '$input' OR number = '$input') AND password = '$password'");

if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        'name' => $user['name'],
        'email' => $user['email']
    ];

    header('Location: ../profile.php');

} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../login.php');
}

?>