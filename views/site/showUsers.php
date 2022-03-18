<h1>Список читатателей</h1>
<h2><a href="<?= app()->route->getUrl('/addInLibraryCard') ?>">Добавить книгу в читатетельский билет</a></h2>
<ol>
    <?php
    foreach ($users as $user) {
        echo '<li>' . $user->login . '<a href="/profile"> + </a>' .'</li>';
    }
    ?>
</ol>