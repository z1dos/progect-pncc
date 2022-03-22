<h2>Добавление новой книги</h2>
<h3><?= $message ?? ''; ?></h3>
<div class="view-form">
    <form method="post">
        <p>Автор <input type="text" name="author"></p>
        <p>Название <input type="text" name="title"></p>
        <p>Год публикации <input type="date" name="the_year_of_publishing"></p>
        <p>Издательство <select name="is_it_a_new_edition">
                <?php
                foreach ($publishing_house as $publishing_hous ) {
                    echo '<option >' . $publishing_hous->title_publishing_house  . '</option >';
                }
                ?>
            </select></p>
        <p>Описание <input type="text" name="description"></p>
        <p>Цена <input type="text" name="price"></p>
        <button>Добавить</button>
    </form>
</div>
<h2>
    <a href="<?= app()->route->getUrl('/addPublishingHouse') ?>">Добавить издательство</a>
</h2>
