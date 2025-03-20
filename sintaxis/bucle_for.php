<?php

# El for tiene 3 partes que se separan por punto y coma
# 1. Inicialización de la variable de control
# 2. Condición de continuidad
# 3. Incremento o decremento de la variable de control (con i++ o i--, o con saltos de 2 en 2, 3 en 3, con i+=2, i+=3)


for($i = 0; $i < 10; $i++){
  if($i % 2 == 0) {
    continue; # Con continue se salta a la siguiente iteración, sin ejecutar el código que sigue, es decir, no se ejecuta el echo $i
  }
  echo $i;
}


?>