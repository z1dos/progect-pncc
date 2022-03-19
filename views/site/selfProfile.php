<h1>Профиль</h1>
<h2><?= app()->auth->user()->login ?? ''; ?></h2>
<?php
$login = app()->auth->user()->login ?? '';
echo "<a href='/profile?id_reader=$login'> Мой читатетльский билет </a>"
?>