<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
</head>

<body>
  <?php require_once '../header.php' ?>
  <div class='game-container'>
    <!-- <p><button class='start'>Start/Restart</button></p>
      <p class='score'>Score:<span>0</span></p>
      <p class='speed'>Current speed:<span>NaN</span>fps</p> -->
    <div class='tile-container'>
      <script language="javascript" type="text/javascript">
      for (var a = 0; a < 20; a++) {
        for (var b = 0; b < 20; b++) {
          document.write("<div class='tile'></div>");
        }
      }
      </script>
    </div>
  </div>
  <script src='script.js'></script>
</body>

</html>