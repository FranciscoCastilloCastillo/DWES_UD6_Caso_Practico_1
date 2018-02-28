<?php

  //Si la variable está establecida y no es nula continuamos
  if(isset($_POST["color"]) && !empty($_POST["color"])){
    //Obtenemos la variable
    $color = $_POST["color"];

    //Comprobaciones
    //Si tiene 7 caracteres incluyendo la almohadilla (#)
    if(strlen($color) == 7){

      //El texto debe comenzar por almohadilla
      if(substr($color, 0,1) == "#"){
        //Obtenemos dos a dos el color en rgb mediante la función hexdec
        echo "El color en RGB es:</br>";
        echo "Rojo:".hexdec(substr($color, 1,2))."</br>";
        echo "Verde:".hexdec(substr($color, 3,2))."</br>";
        echo "Azul:".hexdec(substr($color, 5,2))."</br>";
      }
      else{
        echo "El color debe comenzar por almohadilla (#)";
      }
    }
    else{
      echo "No se ha definido una longitud adecuada del color";
    }
  }
  else{
    echo "En principio no debe entrar aquí porque en el formulario es required";
  }






















?>
