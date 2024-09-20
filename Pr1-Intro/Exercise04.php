<?php

$num_tirada = rand(1, 6);

switch ($num_tirada) {
 case 1: echo"Has sacado un $num_tirada : uno  <br> Número opuesto 6 : seis <br> ----- 1:6 ------";
 break;

 case 2: echo"Has sacado un $num_tirada : dos  <br> Número opuesto 5: cinco <br> ----- 2:5 ------";
 break;

 case 3: echo"Has sacado un $num_tirada : tres  <br> Número opuesto 4: cuatro <br> ----- 3:4 ------";
 break;

 case 4: echo"Has sacado un $num_tirada : cuatro  <br> Número opuesto 3: tres <br> ----- 4:3 ------";
 break;

 case 5: echo"Has sacado un $num_tirada : cinco  <br> Número opuesto 2 : dos <br> ----- 5:2 ------";
 break;

 case 6: echo"Has sacado un $num_tirada : seis  <br> Número opuesto 1 : uno <br> ----- 6:1 ------";
 break;
}