<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://smartcaptcha.yandexcloud.net/captcha.js" defer></script>
</head>
<body>
    <main>
        <div class="circle"></div>
        <div class="register-form-container">
            <h1 class="form-title">
                Вход
            </h1>
            <form action="heart/signin.php" method="post">

            <?php 
                     if(isset($_SESSION['message'])) {
                        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                     } 
                     unset($_SESSION['message']);
                ?>

                <div class="form-fields">
                <div class="form-field">
                    <input required type="text" name="email_or_number" placeholder="Введите номер или почту">
                </div>
                    <div class="form-field">
                        <input required type="password" name="password" placeholder="Введите пароль">
                    </div>
    
                    <div class="form-button">
                        <button class="button" type="submit">Войти</button>
                        <div class="divider">или</div>
                        <a href="registration.php" class="button" type="submit">Зарегестрируйтесь</a>
                    </div>
                </div>

            </form>
        </div>
    </main>
</body>
</html>