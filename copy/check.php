<?php
$name = filter_var(trim($_POST['name']), //берутся данные из поля name также фильтруется (trim удаляет ненужные пробелы)
FILTER_SANITIZE_STRING); //принимает тип фильтрации

$surname = filter_var(trim($_POST['surname']),
FILTER_SANITIZE_STRING);

$patronymic = filter_var(trim($_POST['patronymic']),
FILTER_SANITIZE_STRING);

$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);

$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);




//Проверка

if(mb_strlen($name) < 1 || mb_strlen($name) > 90) {
    echo "Недопустимая длинна имени";
    exit();
} else if(mb_strlen($login) < 1 || mb_strlen($login) > 100) {
    echo "Недопустимая длинна логина";
    exit();
}
else if(mb_strlen($password) < 6 || mb_strlen($password) > 50) {
    echo "Недопустимая длинна пароля (от 6 до 50 символов)";
    exit();
}


$password = md5($password."qwerty"); //создает хеш и создает соль

$mysql = new mysqli('localhost', 'root', 'root', 'copy'); //(Подключение к БД) тут пишем хост, имя пользователя пароль, имя бд
$mysql->query("INSERT INTO `user` (`name`, `surname`, `patronymic`, `login`, `email`, `password`)
 VALUES('$name', '$surname', '$patronymic', '$login', '$email', '$password') ");

 $mysql->close();

 header('Location: Avtor.php'); //Переход на выбранную страницу

?>