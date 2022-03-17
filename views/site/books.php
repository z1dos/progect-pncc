<h1>Список книг</h1>
<ol>
    <?php
    foreach ($books as $book) {
        echo $book->id . ')' . $book->title .'<br>';
    }
    ?>
</ol>
