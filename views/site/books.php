<h1>Список книг</h1>
<?php
if (app()->auth::user()->isAdmin()):
?>
<h2><a href="<?= app()->route->getUrl('/addBooks') ?>">Добавить</a></h2>
    <ol>
        <?php
        foreach ($books as $book) {
            echo '<li>' . $book->title . '</li>';
        }
        ?>
    </ol>
<?php
else:
?>
<ol>
    <?php
    foreach ($books as $book) {
        echo '<li>' . $book->title . '</li>';
    }
    ?>
</ol>
<?php
endif;
?>
