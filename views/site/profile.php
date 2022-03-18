<h1>Профиль</h1>
<p><?= app()->auth::user()->name ?></p>
<h2>Мой читательский билет</h2>
<ol>
    <?php
    foreach ($library_cards as $library_card) {
            echo '<li>' . $library_card->id_reader .
                '<p>ID книги: ' . $library_card->id_book . '</p>' .
                '<p>Дата выдачи: ' . $library_card->date_of_receiving . '</p>' .
                '<p>Дата выдачи: ' . $library_card->delivery_date . '</p>' .
                '<p>Сдано:' . $library_card->passed . '</p>'.
                '</li>';
    }
    ?>
</ol>