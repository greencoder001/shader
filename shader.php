
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Green_Lab Shader</title>
    <style>
      body {
        background-color: #4f8234;
      }
      
      * {
        margin:0;
        padding:0;
      }
      
      .main {
        text-align:center;
        position:absolute;
        left:50%;
        transform:translateX(-50%);
        border-radius: 35px;
        background-color: #5c5c5c;
        color: #ffffff;
        padding: 10px;
        margin-top: 20%;
      }
    </style>
  </head>
  <body>
    <div class="main">
      <?php
        $shader = $_GET["shader"]
        $v = $_GET["version"]
        $type = $_GET["q"]
        echo("$shader , Version: $v und Typ ist $type");
      ?>
      <div class="dl">
        <a href="https://greencoder001.github.io/shader/Green_Lab%20Q%20Low%20v1.0.zip" download>Green_Lab Q Low v1.0 Download</a>
      </div>
    </div>
  </body>
</html>
