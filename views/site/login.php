<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<div class="view-form">
<?php
if (!app()->auth::check()):
    ?>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <p>Логин <input type="text" name="login"></p>
        <p>Пароль <input type="password" name="password"></p>
        <button>Войти</button>
    </form>
</div>
<?php endif;
