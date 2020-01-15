<?php
    require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";
    echo "<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>  
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>

    <meta name='keywords' content=";

        $key = implode(',', $keywords);
       
    
    echo $key;
    echo "<link rel='shortcut icon' href='favicon.png' type='image/png'>
    <link rel='stylesheet' href='css/style.css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display|Roboto&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css'>
    <script src='jq.js' defer></script>
    <script src='main.js' defer></script>
    <title> $title </title>
</head>";
echo $key;