<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>

    <form class="" action="tp.php" method="post">
        
    </form>

    <p>
      <?php

        $date1 = new DateTime();
        $date1->sub(new DateInterval('P22D'));
        echo $date1->format('d-m-Y');


      ?>
    </p>
  </body>
</html>
