<h2>Добавление в чититательский билет</h2>
<h3><?= $message ?? ''; ?></h3>

<div class="view-form">
    <form method="post">
        <p>Логин пользователя <select name="id_reader">
                <?php
                foreach ($users as $user ) {
                    echo '<option >' . $user->login  . '</option >';
                }
                ?>
            </select></p>
        <p>ID книги <select name="id_book">
                <?php
                foreach ($books as $book ) {
                    echo '<option >' . $book->id  . '</option >';
//                    function countDemand($book){
//                        $book->demand++;
//                    }
//                    countDemand($book);
                }
                ?>
            </select></p>
        <p>Дата выдачи <input type="date" name="date_of_receiving"></p>
        <p>Дата сдачи <input type="date" name="delivery_date"></p>
        <button>Добавить</button>
    </form>
</div>
