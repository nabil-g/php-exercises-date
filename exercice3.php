<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>
      <?php




      // date_default_timezone_set('Europe/Paris');
      // --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
      setlocale(LC_TIME, 'fr_FR.utf8','fra');// OK
      // strftime("jourEnLettres jour moisEnLettres annee") de la date courante
      echo strftime("%A %d %B %Y");

      ?>
    </p>
  </body>
</html>
