<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php 
        echo page_title;
        if (isset($page_Name)){
            echo "$page_Name";
        }

        ?>
        </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    
<div id = "menu">
    <div class = "menuAlt"><a href = "index.php">Start</a></div>
    <div class = "menuAlt"><a href = "list.php">Listan</a></div>
    <div class = "menuAlt"><a href = "contact.php">Kontakt</a></div>
</div>