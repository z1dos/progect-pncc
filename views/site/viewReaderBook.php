<h1>Список читатателей у которых есть эта книга</h1>
<div class="view-showUsers-forAdmin">
    <?php
    foreach ($libraryCards as $libraryCard) {
        echo "<div>$libraryCard->id_reader</div>";

    }
    ?>
</div>
