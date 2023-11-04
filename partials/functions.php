<?php

function passwordGenerator($length){

  $psw = '';
  $indexChars = 0;

  $listChars = [
      'abcdefghijklmnopqrstuvwxyz',
      'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
      '0123456789',
      '!?&%$<>^+-*/()[]{}@#_='
  ];


  while(strlen($psw) < $length){

    $listChar = $listChars[$indexChars];

    $char = $listChar[rand(0, strlen($listChar) -1)];
    $psw .= $char;
    $indexChars++;
 
    if($indexChars === count($listChars)) $indexChars = 0;
  }

  return str_shuffle($psw );
}