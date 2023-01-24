<?php


?>




<style>
    li{
        display: flex;
        gap: 20px;
    }
    section{
        margin: 100px;
    }
</style>

<section>
    <h1>Заявки в друзья</h1>
    <div class="box">
        <h3>Заявок в друзья нет.</h3>
    </div>
    <div class="box">
        <ul>
            <li><span>Пользователь 1</span><a href="#">Добавить</a></li>
            <li><span>Пользователь 2</span><a href="#">Добавить</a></li>
            <li><span>Пользователь 3</span><a href="#">Добавить</a></li>
        </ul>
    </div>
</section>
<section>
    <h1>Добавить в друзья</h1>
    <form method="POST">
        <input placeholder="Введите ID друга">
        <input type="submit" value="Отправить заявку">
    </form>
</section>