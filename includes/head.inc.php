<?php
    include  $_SERVER['DOCUMENT_ROOT']. "/19_pro/classes/Util.php";
    require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";
    echo "<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>  
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>

    <meta name='keywords' content=";

        $key = implode(',', $keywords);
       
    
    echo $key;
    echo "<link rel='shortcut icon' href='favicon.png' type='image/png'>";

//    echo "<link rel='stylesheet' href=";
//    echo get_full_path('css/style.css');
   echo Util::get_full_css('css/style.css');
    

    echo "<link href='https://fonts.googleapis.com/css?family=Playfair+Display|Roboto&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css'>";

    echo "<script src='";
    echo get_full_path("jq.js");
    echo "'defer> </script>";

    echo "<script src='";
    echo get_full_path("main.js");
    echo "'defer></script>";


   echo "<title> $title </title>
</head>";
echo $key;