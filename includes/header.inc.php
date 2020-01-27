<?php
    require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";

// print_r($anchor);
echo "<header class='header'>
      <div class='logo'></div>
        <nav class='nav'>";
  for ($i=0; $i < count( $anchor["Path"]); $i++) { 
   ECHO "<a style='color:{$anchor['Color'][$i]}' 
    href='{$anchor['Path'][$i]}'> 
    {$anchor['Content'][$i]}</a>";
  }
            // <a href='#main'>Главная</a>
            // <a href='#about'>О нас</a>
            // <a href='#contacts'>Контакты</a>
       echo" </nav>
</header>";




