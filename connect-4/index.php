<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Connect 4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <nav id='back-button'><a href="../index.html">Back</a></nav> -->
    <?php require_once '../header.php' ?>
    <h1>My awesome connect 4</h1>
    <p>Your turn:<span id='player-turn'></span></p>
    <script language="javascript" type="text/javascript">
        document.write("<table>");
        for (var a = 0; a < 9; a++) {
            document.write("<tr>");
            for (var b = 0; b < 7; b++) {
                document.write("<td></td>");
            }
            document.write("</tr>");
        }
        document.write("</table>");
    </script>
    <div id="final-message">
        <b>YOU WON: <span id='winner'></span></b>
    </div>
    <script src='script.js'></script>
</body>

</html>