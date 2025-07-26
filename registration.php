<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="circle"></div>
        <div class="register-form-container">
            <h1 class="form-title">
                Регистрация
            </h1>
            
                <?php 
                     if(isset($_SESSION['message'])) {
                        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                     } 
                     unset($_SESSION['message']);
                ?>

            <form action="heart/signup.php" method="post">
                <div class="form-fields">
                    <div class="form-field">
                        <input required type="text" name="name" placeholder="Имя">
                    </div>
                    <div class="form-field">
                        <input required type="text" name="number" placeholder="Номер телефона">
                    </div>
                    <div class="form-field">
                        <input required type="text" name="email" placeholder="Почта">
                    </div>
                    <div class="form-field">
                        <input required type="password" name="password" placeholder="Пароль">
                    </div>
                    <div class="form-field">
                        <input required type="password" name="password_confirm" placeholder="Подтвердите пароль">
                    </div>
                    <div class="form-button">
                        <button class="button" type="submit">Зарегестрируйтесь</button>
                        <div class="divider">или</div>
                        <a href="login.php" class="button-log" type="submit">Войдите</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>