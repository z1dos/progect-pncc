<h1>Список читатателей</h1>
<h2><a href="<?= app()->route->getUrl('/addInLibraryCard') ?>">Добавить книгу в читатетельский билет</a></h2>
<ol>
    <?php
    foreach ($users as $user) {
        echo '<li>' . "<a href='/profile?id_reader=$user->login'> $user->login </a>" . '</li>';
    }
    ?>
</ol>