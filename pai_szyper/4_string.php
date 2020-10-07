<?php
  $text = <<<T
  zsk - Zespół
  Szkół
  Komunikacji<br>
  T;

  echo $text;
  echo '<hr>';
  echo nl2br($text); //dodaje znaki białe
  echo '<hr>';
  $name = "jANuSz";
  echo strtolower($name), '<br>'; //zmiana na małe litery
  echo strtoupper($name),'<br>'; //zmiana na duże litery
  $name = "jaNUsz koWalski";
  echo ucfirst($name),'<br>'; //zamiana pierwszej litery na dużą
  echo ucwords($name),'<br>';
  $name = <<<T
  janUsz<br>
  T;
  echo ucfirst(strtolower($name)),'<br>';
  echo '<hr>';
  $text = <<<LOREM
   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  LOREM;
  echo $text;
  echo wordwrap($text, 40 ,'<br>'); //zwijanie
  echo wordwrap($text, 40 ,'<hr>'); //zwijanie


 ?>
