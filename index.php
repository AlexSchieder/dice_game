<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?
    // rollDice($num) to roll a [$side] sided dice [$num] of times
    // takes in number of dices (default = 1)
    // takes in number of sides of the dice(s) (default = 6)
    // printes number of eyes on dice(s)

    function rollDice ($num = 1, $side = 6) {
      for($i = 0; $i < $num; $i++) {
        return rand(1, $side) . "\n";
      }
    }

    //rollDice(4);



    if(isset($_POST['submit'])) {
      echo rollDice($_POST["times"], $_POST["sides"]);
    }

    ?>
    <form action="<?$_SERVER['PHP_SELF']?>" method="post">
      <input type="number" name="times" value="1" step="1" min="1">
      <input type="number" name="sides" value="6" step="1" min="2">
      <input type="submit" name="submit" value="submit">
    </form>


  </body>
</html>
