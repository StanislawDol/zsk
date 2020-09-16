<?php
  $name ='Janusz';
  $surname ='Nowak';
  echo 'Imię: $name<br>';
  echo "Imię: $name";


  //typy danych
  //boolean
  $prawda=true;
  $falsz=false;

  echo $prawda; //1
  echo $falsz; //nic nie wyświetla

  //integer
  $bin = 0b1011; //11
  $oct = 012; //10
  $dec = 12; //12
  $hex = 0xC; //12
  echo "<br>$bin";
  echo "<br>$oct";
  echo "<br>$dec";
  echo "<br>$hex";
  //składnia heredoc
  //Komentarze nie mogą być przy nazwie heredoca
    $name='anna';

    $text = <<<LABEL
    <hr>Heredoc 1 <br>
    Imie: $name
    <hr>
  LABEL;
    echo $text;

    echo <<<L
      Heredoc 2<br>
      Imie: $name <br>
      Nazwisko: $surname<hr>
  L;
  //składnia nowdoc
    echo <<<'L'
      Newdoc 1<br>
      Imie: $name <br>
      Nazwisko: $surname<hr>
  L;

  $city = 'Poznan';
  echo "Nazwa zmiennej: \$city, wartość: $city";

?>
