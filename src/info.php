

<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/HelloN/HelloGen.php';
use HelloN\HelloGen;
?>

<!doctype html>
<html>
  <head>
    <title>hello13</title>
    <style>
      body {
          background-color: #888888;
      }
      img.doge {
        position: absolute;
        max-width: 80%;
        top: 10%;
        left: 10%;
        border-radius: 3px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.9);
      }
      div.greeting {
        text-align: center;
        vertical-align: top;
      }
    </style>
  </head>
  <body>
    <div class="greeting"><?php echo HelloGen::rotate(13); ?></div>
    <img class="doge" src="static/doge.jpg">
  </body>
</html>
