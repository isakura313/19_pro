<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/admin/admin.head.php";
?>
    <section class="has-background-link columns ">
        <div class="column is-full">
            <h1 class="label is-size-2 has-text-centered has-text-white"> Hello user</h1>
            <h3 class="is-size-2 has-text-centered has-text-white">CMS система  <span class="has-text-danger has-text-weight-bold">Nordic </span>  </h3>
        <!-- <?php
    require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/header.inc.php";
    ?> -->
     <!-- переписать чуть позже -->
        </div>
    </section>
        <div class="columns">
            <div class="column has-text-centered is-full">
                <a href="admin.parag.php"> 
                <button class="button is-size-4 is-danger">
                 Отредактировать параграфы
                </button>
                </a>
                <a href="admin.cards.php"> 
                    <button class="button is-size-4 is-link">Отредактировать карточки </button></a>  
                <a href="admin.anchor.php"> 
                    <button class="button is-size-4 is-warning">Отредактировать ссылки
                </button>
                </a>
            </div>
        </div>
   
</body>
</html>