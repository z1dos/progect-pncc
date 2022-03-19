<h1>Профиль <?= app()->auth->user()->login ?? ''; ?></h1>
<h2>Мой читательский билет</h2>
<ol>
    <?php
    foreach ($library_cards as $library_card) {
        echo
            '<p>ID книги: ' . $library_card->id_book . '</p>' .
            '<p>Дата выдачи: ' . $library_card->date_of_receiving . '</p>' .
            '<p>Дата выдачи: ' . $library_card->delivery_date . '</p>' .
            '<p>Сдано:' . $library_card->passed .'</p>';
        if (app()->auth::user()->isAdmin()){
            echo '<form method="post">' .
            '<select>' .
            "<option selected>$library_card->passed</option>".
            '<option>Да</option> ' .
            '</select>' .
                '<button>Поменять</button>' .
            '</form>';
        }
    }
    echo '<h2>Пользователь: ' . $library_card->id_reader . '<h2>';
    ?>
</ol>