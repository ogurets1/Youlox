<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
<header class="header">
    <img src="./public/images/logo.png" alt="">
    <a href="#" class="bt">О МАГАЗИНЕ</a>
    <a href="#" class="bt1">КАТАЛОГ</a>
    <a href="#" class="bt2">ДОСТАВКА И ОПЛАТА</a>
    <a href="#" class="bt3">КОНТАКТЫ</a>
    <a href="loginhtml.php" class="btns">Войти</a>
    </header>
    <div class="form">
        <h2 class="f">Регистрация</h2>
    <form action="register.php" class="form1" method="post"><br>
    <input type="text" class="f1" placeholder="Имя" name="firstname"><br>
    <input type="text" class="f1" placeholder="Фамилия" name="lastname"><br>
    <input type="text" class="f4" placeholder="E-mail" name="email"><br>
    <input type="text" class="f2" placeholder="Пароль" name="pass"><br>
    <input type="text" class="f3" placeholder="Подтвердите пароль" name="repeatpass"><br><br>
    <button type="submit" class="btf">Зарегистрироваться</button>
    </div>
</body>
</html>