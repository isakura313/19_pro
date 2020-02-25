<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/admin/admin.head.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";

?>
<style>
    .display-none {
        display: none;
    }
</style>
<section class="columns has-background-info is-centered">
    <div class="column is-half has-text-centered">
    <h3 class="title has-text-white">Редактирование ссылок</h3>
    <hr class="login-hr">
    <p  class="is-size-5 has-text-white"> Добавьте новые, удалите, или обновите ссылки</p>
    
    <form action="/admin/form_anchor" method="POST" class="has-background-light">
        <div class="field" id="radios">
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
                <label class="label"> Введите ID ссылки</label>
                <input type="text" class="input is-medium" placeholder="id" name="id">

                <div id="hide-on-delete">
                    <label class="label"> Выберите цвет </label>
                    <div class="select">
                        <select name="color">
                            <option>red</option>
                            <option>green</option>
                            <option>blue</option>
                            <option>yellow</option>
                        </select>
                    </div>

                    <label class="label"> Куда ведет ссылка? </label>
                    <input type="text" class="input is-medium" placeholder="path" name="path">

                    <label class="label"> Введите название ссылки</label>
                    <input type="text" class="input is-medium" placeholder="content" name="content">

                    <label class="label"> Введите номер ссылки в порядке</label>
                    <input type="text" class="input is-medium" placeholder="ordera" name="ordera">
                </div>
            </div>
        </div>
        <button class="button is-success is-large is-pulled-right" type="submit">
            Отправить данные
        </button>
    </form>
    </div>
</section>

    <div class="columns is-centered">
        <div class="column is-half">
        <table class="table is-bordered is-hoverable">
            <thead>
                <tr>
                    <?php
                        foreach ($anchor_cms as $key => $value){
                            echo "<th> {$key} </th>";
                        }
                    ?> 
                </tr>
            </thead>
        <?php
        for ($i=0; $i < count($anchor_cms["Id"]); $i++) { 
            echo "<tr>";
                echo "<th> {$anchor_cms['Id'][$i]} </th>";
                echo "<th> {$anchor_cms['Color'][$i]} </th>";
                echo "<th> {$anchor_cms['Path'][$i]}</th>";
                echo "<th>  {$anchor_cms['Content'][$i]} </th>";
                echo "<th>  {$anchor_cms['Order'][$i]} </th>"; 
            echo "</tr>";
        }
        ?>
        </table>
        </div>
    </div>

    <!-- Ниже -- скрипт, чтобы прятать лишнее при выборе del -->
    <script>
        let hideOnDelete = document.getElementById("hide-on-delete");
        let radios = document.getElementById("radios");

        radios.addEventListener("change", function(event){
            if (event.target.value == "del") {
                hideOnDelete.classList.add("display-none");
            } else {
                hideOnDelete.classList.remove("display-none");
            }
        })
    </script>
</body>
</html>