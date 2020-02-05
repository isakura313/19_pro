<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/admin/admin.head.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";
?>
<section class="columns has-background-info is-centered">
    <div class="column is-half has-text-centered">
    <h3 class="title has-text-white"> Редактирование карточек</h3>
    <hr class="login-hr">
    <p  class="is-size-5 has-text-white"> Введите контент, каждую карточку отдельно</p>
    <figure class="avatar">
        <img src="../img/kangaroo.png" class="is-size-6">
        <!-- сделать так что бы мы получали из первой карточки картинку -->
    </figure>
    <form action="form_cards.php" method="POST" class="has-background-white ter" enctype="multipart/form-data">
        <div class="field">
            <label class="radio">
                <input type="radio" name="choose" value="ins" required>
                Вставить
            </label>
            <label class="radio">
                <input type="radio" name="choose" value="del" required>
                Удалить
            </label>
            <label class="radio">
                <input type="radio" name="choose" value="update" required>
                Редактировать
            </label>
        </div>
        <div class="field">
            <div class="box">
                <label for="" class="label"> Введите ID  карточки </label>
                <input type="text" class="input is-medium" placeholder="id" name="id" >

                <label for="" class="label"> Введите номер карточки в порядке</label>
                <input type="text" class="input is-medium" placeholder="order" name="ordera" >

                <label for="" class="label"> Введите Заголовок</label>
                <input type="text" class="input is-medium" placeholder="Заголовок" name="header" >
                
                <div class="field">
                <label class="label">  Загрузите картинку 
                <div class="file is-centered">
                       <input class="file-input" type="file" name="picture">
                         <span class="file-cta">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                         </span>
                    <span class="file-label">
                   Выберите файл
                </span>
                </span>
                </label>
                </div>
                </div>

            <label class="label"> Введите данные параграфа</label>
            <textarea  rows=15  type="text" class="textarea is-medium"  name="parag_cont"> </textarea>
            </div>
        </div>
        <button class="button is-success is-large is-pulled-right" type="submit">
            Отправить данные
        </button>
    </form>
</div>

</section>
<!-- тут выводится список параграфов с их id -->
<!-- хотим длину параграфы обрезато до 30 символов -->
<div class="columns is-centered">
<div class="column is-half">
<table class="table is-bordered is-hoverable">
    <thead>
    <tr>
<?php
    foreach ($cards_cms as $key => $value){
        echo "<th> {$key} </th>";
    }
?> 
    </tr>
    </thead>
<?php
for ($i=0; $i < count($cards_cms["Id"]); $i++) { 
   echo "<tr>";
    echo "<th> {$cards_cms['Id'][$i]} </th>";
    echo "<th> {$cards_cms['Img'][$i]} </th>";
    echo "<th> {$cards_cms['Header'][$i]} </th>";
    echo "<th> {$cards_cms['Parag'][$i]}</th>";
    echo "<th>  {$cards_cms['Ordera'][$i]} </th>";
   echo "</tr>";
}
?>
</table>
</div>
</div>
</body>
</html>


</body>
</html>