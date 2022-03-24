<h1>Список книг</h1>
<?php
if (app()->auth::user()->isAdmin()):
?>
<h2><a href="<?= app()->route->getUrl('/addBooks') ?>">Добавить</a></h2>
<div class="view-showUsers-forAdmin">
    <div>
        <p>ID </p>
        <p>Название </p>
        <p>Автор </p>
        <p>Дата публикации </p>
        <p>Издательство </p>
        <p>Цена </p>
    </div>
    <?php
    foreach ($books as $book) {
        echo '<div class="view-books">' .
            '<p>' . $book->id  .'</p>' .
            '<p>' . $book->title . '</p>' .
            '<p>' . $book->author . '</p>' .
            '<p>' . $book->the_year_of_publishing . '</p>' .
            '<p>' . $book->is_it_a_new_edition . '</p>' .
            '<p>' . $book->price . '</p>' .
            '</div>';
    }
    ?>
    <?php
    else:
    ?>
    <div class="view-showUsers-forAdmin">
        <div>
            <p>Название </p>
            <p>Автор </p>
            <p>Дата публикации </p>
            <p>Издание </p>
            <p>Цена </p>
        </div>
        <?php
        foreach ($books as $book) {
            echo '<div class="view-books">' .
                '<p>' . $book->title . '</p>' .
                '<p>' . $book->author . '</p>' .
                '<p>' . $book->the_year_of_publishing . '</p>' .
                '<p>' . $book->is_it_a_new_edition . '</p>' .
                '<p>' . $book->price . '</p>' .
                '</div>';
        }
        ?>

        <?php
        endif;
        ?>
