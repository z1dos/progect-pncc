<h2>Добавление новой книги</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <p>Автор <input type="text" name="author"></p>
    <p>Название <input type="text" name="title"></p>
    <p>Год публикации <input type="text" name="the_year_of_publishing"></p>
    <p>Новое издание? <input type="text" name="is_it_a_new_edition"></p>
    <p>Описание <input type="text" name="description"></p>
    <p>Цена <input type="text" name="price"></p>
    <button>Добаить</button>
</form>