<h3><?= $message ?? ''; ?></h3>
<h2>Добавление нового издательства</h2>
<div class="view-form">
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <p>Название <input type="text" name="title_publishing_house"></p>
        <button>Добавить</button>
    </form>
</div>