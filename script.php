<?php
 //testo
$text = "Ciao, come stai? Spero tutto bene, a me sta andando alla grande!";
// get
$badword = $_GET["badword"];
// rimpiazzo
$newText = str_replace($badword, "***", $text);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php</title>
  </head>
  <body>
   <div class="">
    <p>testo</p>
    <h1><?php echo $text;
    ?></h1>
    <p>Lunghezza testo</p>
    <h2><?php echo strlen($text)?></h2>
    <p>Badword</p>
    <h3><?php echo $badword?></h3>
    <p>rimpiazzo parola</p>
    <p><?php
    echo $newText;
    ?></p>

   </div>
  </body>
</html>
