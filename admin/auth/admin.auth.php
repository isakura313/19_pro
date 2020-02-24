<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/admin/admin.head.php";
?>
<div class="hero is-fullheight columns is-centered has-background-link ">

<form action="/auth_procces" method="POST" class="column is-half is-offset-3 has-background-white has-text-centered">
<h1 class="is-size-4"> Привет войди:</h1>
<div class="field">
  <label class="label">Имя</label>
  <div class="control">
    <input class="input" type="text" placeholder="Введите имя" required name="name">
  </div>
</div>
<div class="field">
  <label class="label">Пароль</label>
  <div class="control">
    <input class="input" type="password" placeholder="Введите пароль" required name="password">
  </div>
</div>
<button class="button is-pulled-right is-danger" type="sumbit"> Отправить </button>
</form>
</div>
</body>
</html>