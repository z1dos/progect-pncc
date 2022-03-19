<h1>Список читатателей</h1>
<h2><a href="<?= app()->route->getUrl('/addInLibraryCard') ?>">Добавить книгу в читатетельский билет</a></h2>
<div class="view-showUsers-forAdmin">
    <div>
        <p>ID </p>
        <p>Логин </p>
        <p>ФИО </p>
        <p>Адрес </p>
        <p>Номер телефона </p>
    </div>

    <?php
    foreach ($users as $user) {
        echo "<a href='/profile?id_reader=$user->login'> 
<div>$user->id</div>
<div>$user->login</div>
<div>$user->name $user->surname $user->patronymic </div>
<div>$user->address</div>
<div>$user->phone_number</div>
</a>";

    }
    ?>
</div>
