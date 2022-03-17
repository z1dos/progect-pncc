<h1>Список читатателей</h1>
<ol>
    <?php
    foreach ($users as $user) {
        echo '<li>' . $user->login .'</li>';
    }
    ?>
</ol>