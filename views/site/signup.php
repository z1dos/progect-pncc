<h2>Регистрация нового пользователя</h2>
<h3><?= $messageAddBook ?? ''; ?></h3>
<form method="post">
    <p>Фамилия <input type="text" name="surname"></p>
    <p>Имя <input type="text" name="name"></p>
    <p>Отчество <input type="text" name="patronymic"></p>
    <p>Адрес <input type="text" name="address"></p>
    <p>Номер телефона <input type="tel" name="phone_number"></p>
    <p>Логин <input type="text" name="login"></p>
    <p>Пароль <input type="password" name="password"></p>
    <button>Зарегистрироваться</button>
</form>