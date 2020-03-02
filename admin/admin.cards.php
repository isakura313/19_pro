<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/admin/admin.head.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/classes/Db.php";

if(isset($_POST['choose'])) {
    echo"hello";
    $ans = $_POST['choose'];
    $id = $_POST['id'];
    $header = $_POST['header'];
    $parag = $_POST['parag_cont'];
    $ordera = $_POST['ordera'];
    $date = date("Y-m-d");


    if ($ans == "ins") {
        $upload_name = uniqid() . $_FILES['picture']['name']; // несовершенный код
        $path = "img/upload_img/{$upload_name}";
        $uploaddir = $_SERVER["DOCUMENT_ROOT"] . "/19_pro/img/upload_img/";
        $uploadfile = $uploaddir . $upload_name;
        //  сам процесс перемещения файла на сервер
        // процесс валидизации размера
        if ($_FILES['picture']['size'] >= 2000000) {
            echo "так много нельзя!Найдите картинку поменьше!";
            die();
        }

        if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
            echo "файл в общем корректный и все работает верно";
        } else {
            echo "Возможна атака с помощью файловой загрузки";
        }

        $sql = "INSERT INTO cards VALUES ('$id', '$path', '$header', '$parag', '$ordera', '$date' )";
        if (Db::getdbconnect()->query($sql)) {
            echo "Новая запись успешно загружена $back";
        } else {
            echo "Произошло фиаско";
        }
        exit();
    }

    if ($ans == "del") {
        $id = trim($id);
        $sql_path = "SELECT img FROM cards WHERE id='$id'";
        $result = Db::getdbconnect()->query($sql_path);
        while ($row = $result->fetch_assoc()) {
            echo " картинка успешна удалена";
            unlink($_SERVER["DOCUMENT_ROOT"] . "/19_pro/" . $row['img']);
        }
        $sql = "DELETE FROM cards WHERE id='$id'";

        if (Db::getdbconnect()->query($sql)) {
            echo "Запись успешно удалена";
        } else {
            echo "Произошло фиаско";
        }
        exit();
    }

    if ($ans == "update") {
        $id = trim($id);

        $sql_path = "SELECT img FROM cards WHERE id='$id'";
        $result = Db::getdbconnect()->query($sql_path);
        while ($row = $result->fetch_assoc()) {
            echo " картинка успешна удалена";
            echo "<br>";
            unlink($_SERVER["DOCUMENT_ROOT"] . "/19_pro/" . $row['img']);
        }

        $upload_name = uniqid() . $_FILES['picture']['name']; // несовершенный код
        $path = "img/upload_img/{$upload_name}";
        $uploaddir = $_SERVER["DOCUMENT_ROOT"] . "/19_pro/img/upload_img/";
        $uploadfile = $uploaddir . $upload_name;

        if ($_FILES['picture']['size'] >= 2000000) {
            echo "так много нельзя!Найдите картинку поменьше!";
            die();
        }
//нужно добавить валидизацию на скрипт

        if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
            echo "файл в общем корректный и все работает верно";
        } else {
            echo "Возможна атака с помощью файловой загрузки";
        }
        $sql = "UPDATE cards SET img='$path',header='$header', parag='$parag', ordera='$ordera' WHERE id='$id'";

        if (Db::getdbconnect()->query($sql)) {
            echo "Запись успешно отредактирована $back $back_timer";

        } else {
            echo "Произошло фиаско";
        }
        exit();
    }

}
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
    <form  method="POST" class="has-background-white ter" enctype="multipart/form-data">
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