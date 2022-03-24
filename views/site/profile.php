<h2>Читательский билет</h2>
<div class="view-showUsers-forAdmin">
    <div>
        <?php
        if (app()->auth::user()->isAdmin()) {
            echo '<p>ID </p>';
        }
        ?>
        <p>ID книги </p>
        <p>Дата выдачи </p>
        <p>Дата сдачи </p>
        <p>Сдано </p>
        <?php
        if (app()->auth::user()->isAdmin()) {
            echo '<p>Подтверждение </p>';
        }
        ?>
    </div>
</div>
<div class="view-profile">
    <?php
    foreach ($library_cards as $library_card) {
        $passed = $library_card->passed;
            echo '<div>';
            if (app()->auth::user()->isAdmin()){
              echo  '<p>' . $library_card->id . '</p>';
            }
            echo
            '<p>' . $library_card->id_book . '</p>' .
            '<p>' . $library_card->date_of_receiving . '</p>' .
            '<p>' . $library_card->delivery_date . '</p>' .
            '<p>' . $passed . '</p>';
        if (app()->auth::user()->isAdmin()) {
            if ($passed == 'Нет'){
                echo "<a href='/profileEdit?id=$library_card->id'>Поменять</a>";
//                "<form method='post'>
/*                <input name='csrf_token' type='hidden' value='<?= app()->auth::generateCSRF() ?>'/>*/
//                <input name='passed' value='$passed'>
//                <button>Поменять</button>
//                </form>";
            }
            if ($passed == 'Да'){
                echo "<p>Сдано</p>";
            }
        }
        echo '</div>';
    }
    ?>
</div>
</ol>