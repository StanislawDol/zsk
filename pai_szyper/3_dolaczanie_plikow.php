<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dołączanie plików</title>
  </head>
  <body>

    <h3>Początek pliku</h3>
    <?php
      include './3_1_file.php';
      include_once './3_1_file.php'; //jak był dodany o go nie dodaje
      require './3_1_file.php'; //wymaga pliku (jak nie ma to jest fatal error)
      require_once './3_1_file.php'; //podobnie jak w przypadku include _once
     ?>
     <h3>Koniec pliku</h3>
  </body>
</html>
