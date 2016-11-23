<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>
      <?php

        $date1 = new DateTime('2016-05-16'); // objet avec une date définie
        $date2 = new DateTime(); // objet sans date (donc celle d'aujourd'hui)
        $interval = $date1->diff($date2);
        echo $interval->format('%a jours');




      ?>
    </p>
  </body>
</html>
