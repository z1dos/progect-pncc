<h2>Редактирование</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <input name='csrf_token' type='hidden' value="<?= app()->auth::generateCSRF() ?>">
    <select name="passed" id="passed">
        <option></option>
        <option>Да</option>
        <option>Нет</option>
    </select>
    <button>Поменять</button></form>
</ol>