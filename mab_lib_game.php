<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="mab_lib_game.php" method="get">
        Color: <input type="text" name="color" value=""><br>
        Plural Noun: <input type="text" name="pluralnoun"><br>
        Celebrity: <input type="text" name="celebrity"><br>
        <input type="submit">
    </form>
    <?php
      $color = $_GET['color'];
      $noun = $_GET['pluralnoun'];
      $celebrity = $_GET['celebrity'];
      echo "Roses are $color <br>";
      echo "$noun are blue <br>";
      echo "I love $celebrity <br>";
    ?>
  </body>
</html>
