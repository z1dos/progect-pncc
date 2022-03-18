<h1>Список книг</h1>
<?php
if (app()->auth::user()->isAdmin()):
    ?>
    <h2><a href="<?= app()->route->getUrl('/addBooks') ?>">Добавить</a></h2>
<div class="view-books-all">
            <?php
            foreach ($books as $book) {
                echo '<div class="view-books">' .
                    '<p class="view-books-id">' . $book->id . '</p>' .
                    '<div class="view-books-other">' .
                    '<p>Название: ' . $book->title . '</p>' .
                    '<p>Автор: ' . $book->author . '</p>' .
                    '<p>Дата публикации: ' . $book->the_year_of_publishing . '</p>' .
                    '<p>Издание: ' . $book->is_it_a_new_edition . '</p>' .
                    '<p>Описание: ' . $book->description . '</p>' .
                    '<p>Цена: ' . $book->price . '</p>' .
                    '</div>' .
                    '</div>';
            }
            ?>
</div>
<?php
else:
    ?>
    <ol>
        <?php
        foreach ($books as $book) {
            echo '<li>' .
                '<p>Название: ' . $book->title . '</p>' .
                '<p>Автор: ' . $book->author . '</p>' .
                '<p>Дата публикации: ' . $book->the_year_of_publishing . '</p>' .
                '<p>Издание: ' . $book->is_it_a_new_edition . '</p>' .
                '<p>Описание: ' . $book->description . '</p>' .
                '<p>Цена: ' . $book->price . '</p>' .
                '</li>';
        }
        ?>
    </ol>
<?php
endif;
?>
