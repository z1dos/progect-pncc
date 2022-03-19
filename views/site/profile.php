<h1>Профиль <?= app()->auth->user()->login ?? ''; ?></h1>
<h2>Мой читательский билет</h2>
<div class="view-showUsers-forAdmin">
    <div>
        <p>ID книги </p>
        <p>Дата выдачи </p>
        <p>Дата сдачи </p>
        <p>Сдано </p>
        <?php
        if (app()->auth::user()->isAdmin()) {
            echo '<p>Поменять </p>';
        }
        ?>
    </div>
</div>
<div class="view-profile">
    <?php
    foreach ($library_cards as $library_card) {
        echo
            '<div>' .
            '<p>' . $library_card->id_book . '</p>' .
            '<p>' . $library_card->date_of_receiving . '</p>' .
            '<p>' . $library_card->delivery_date . '</p>' .
            '<p>' . $library_card->passed . '</p>';
        if (app()->auth::user()->isAdmin()) {
            echo '<form method="post">' .
                '<select>' .
                "<option selected>$library_card->passed</option>" .
                '<option>Да</option> ' .
                '</select>' .
                '<button>Поменять</button>' .
                '</form>';
        }
        echo '</div>';
    }
    ?>
</div>
</ol>