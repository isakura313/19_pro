

<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/admin/admin.head.php";
?>

<div class="hero is-fullheight columns is-centered has-background-link ">

<form action="/postreg" method="POST" class="column is-half is-offset-3 has-background-white has-text-centered">
<h1 class="is-size-4"> Привет зарегайся:</h1>
<noscript>
     <p>Включите javascript для корректной работы сайта!</p>
</noscript>
<div class="field">
  <label class="label">Имя</label>
  <div class="control">
    <input class="input" type="text" placeholder="Введите имя" required name="name" autocomplete>
  </div>
</div>

<div class="field">
  <label class="label">Почта</label>
  <div class="control">
    <input class="input" type="email" placeholder="Введите почту" required name="email" autocomplete>
  </div>
</div>

<div class="field">
  <label class="label">Пароль</label>
  <div class="control">
    <input class="input" type="password" placeholder="Введите пароль" required name="password" autocomplete>
  </div>
</div>

<div class="field">
  <label class="label"> Повтор пароля</label>
  <div class="control">
    <input class="input" type="password" placeholder="Введите снова пароль" required name="dubl_password" autocomplete>
  </div>
</div>

<label class="checkbox">
  <input type="checkbox" name="personal">
  Cогласен с обработкой персональных данных
</label>


<button class="button is-pulled-right is-danger" type="sumbit" id="sub"> Отправить </button>
</form>
</div>

<?php
echo "<script  src='http://";
    echo $_SERVER['HTTP_HOST'];
    echo "/19_pro/admin/auth/validate.js'>
    </script>";
?>
</body>
</html>

