<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>
      <?php

        $date1 = new DateTime();
        $date1->add(new DateInterval('P20D'));
        echo $date1->format('d-m-Y');




      ?>
    </p>
  </body>
</html>
