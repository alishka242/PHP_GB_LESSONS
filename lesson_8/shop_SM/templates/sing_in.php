<p><?= $params['message'] ?></p>
<?php if(!$params['allow']) : ?>
<div class="singIn">
    <h2>Вход</h2>
    <form action="/sing_in" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="pass" placeholder="password">
        <div>
            <span>Save?</span>
            <input type="checkbox" name="save">
        </div>
        <input type="submit" name="ok">
    </form>
</div>
<a href="/registration">Зарегистрироваться</a>
<? endif;?>