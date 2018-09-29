<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Basic PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>
    <div class="contenedor">
      <h1>Aprendiendo PHP, los primeros pasos</h1>
        <div class="contenido">
          <?php
                      echo "hola mundo";
           ?>
        
    </div>
    <hr>
    <div class="contenido">
          <?php
                      $hola = "hola mundo";
                      $numero20 = 20;
                      echo $numero20;
                      $saludos = "<h1>Concatenado</h1>";
                      echo $saludos;
                      echo $hola . $numero20;
                      echo $saludos = "<h1>Concatenado con espacio</h1>";
                      echo $hola . " " . $numero20;
           ?>
    </div>
    <hr>
    <div class="contenido">
          <?php
                  $nombre = "Hugo";
                  $apellido = "CM";
                  echo "<h1> HTML dentro de PHP {$nombre} {$apellido}</h1>";
           ?>
           <h1><?php echo 'PHP dentro de HTLM ' . $nombre . " " . $apellido;?></h1>

           <?php //comentarios en php de una linea
           /* y de
           * varias
           * lineas
           */
          ?>
    </div>
    <hr>
    <div class="contenido">
          <?php
                echo "concatenando string y funcion suma ";
                echo "<hr>";
                  echo "10+20 = ". (10+20);
           ?>
           <hr>
           <?php
           $numero1 = 10;
           $numero2 = 20;
           $numero3 = 30;
           $numero4 = 40;
           //suma
           echo $numero1+$numero2;
           echo "<hr>";
           //resta
           echo $numero4-$numero3;
           echo "<hr>";
           //multi
           echo $numero3*$numero2;
           echo "<hr>";
           //divi
            echo "funcion divi: ($numero3/$numero4) = ";
           echo $numero3/$numero4;
           echo "<hr>";
           //compleja
           echo "funcion compleja: (30*20)+(30/40) = ";
           echo ($numero3*$numero2)+($numero3/$numero4);
           echo "<hr>";
           //incremento ++ decremento --
           $numero1++;
           echo $numero1;
           echo "<hr>";

           $numero1--; $numero1--;
           echo $numero1;

           echo "<hr>";
          //incremento de la misma variable
          $total = 5;
          $total += 150;
          $total += 10;
          $total -= 20;
          echo $total;
           echo "<hr>";

            ?>

           <?php //comentarios en php de una linea
           /* y de
           * varias
           * lineas
           */
            ?>
    </div>
    <hr>
    <div class="contenido">
         <?php
         if (1<0) {
           echo "1 es mayor";
         } else {
           echo "1 es menor";
         }
         echo "<hr>";
         $edad1 = 12;
         $edad2 = 11;
         if ($edad1<$edad2) {
           echo "la edad 1 es menor";
         } elseif ($edad1==$edad2) {
           echo "la edad 1 es igual que edad 2";
         }
         else {
           echo "la edad 1 es mayor";
         }
         echo "<hr>";
         $numero = 1;
         if ($numero % 2 == 0) {
          echo "numero par";
        } else {
          echo "numero impar";
        }
        ?> 
    </div>
    <hr>
    <div class="contenido">
         <?php
              $lenguaje = "JavaScript";
              switch ($lenguaje) {
                case 'PHP':
                  echo "Backend";
                  break;
                case 'JavaScript':
                  echo "FrontEnd y Backend";
                  break;
                  case 'HTML5':
                    echo "FrontEnd";
                    break;
                default:
                  echo "No valido";
                  break;
              }
        ?>
    </div>
    <hr>
    <div class="contenido">
         <?php
              //versiones anteriores de crear un array
             $tecnologias4 = ['CSS', 'HTML', 'JS', 'jQuery'];
             echo $tecnologias4[1];
             echo $tecnologias4[2];
             echo $tecnologias4[3];
             ?>
             <pre>
               <?php
               print_r($tecnologias4);
                ?>
             </pre>
             <?php
              //nueva version de crear array
             $lenguajes = array('CSS', 'HTML', 'JS', 'jQuery', 20);
             echo $lenguajes[3];
              ?>
             <pre>
               <?php
               var_dump($lenguajes);
                ?>
             </pre>
    </div>
    <hr>
    <div class="contenido">
         <?php
              //versiones anteriores de crear un array
             $tecnologias = ['CSS', 'HTML', 'JS', 'jQuery'];

             ?>
             <pre>
               <?php
               print_r($tecnologias);
                ?>
             </pre>
             <?php
             $tecnologias[] = 'Python';
             $tecnologias[5] = 'Java';
              ?>
              <pre>
                <?php
                print_r($tecnologias);
                 ?>
              </pre>
              <?php
              //borrar ultimo elemento y traerlo en variable
              $java = array_pop($tecnologias);
               ?>
               <h1><?php echo $java; ?></h1>
               <pre>
                 <?php
                 print_r($tecnologias);
                  ?>
               </pre>
               <?php //remover un elemento del array [poner el numero del array a quitar]
               unset($tecnologias[0])
               ?>
               <pre>
                 <?php
                 print_r($tecnologias);
                  ?>
               </pre>
               <?php
               //borrar primer elemento y traerlo en variable
               $html = array_shift($tecnologias);
                ?>
           <h1><?php echo $html; ?></h1>

               <pre>
                 <?php
                 print_r($tecnologias);
                  ?>
               </pre>
               <?php
               //remover ciertos elemento y agregar otros
               $array = array_splice($tecnologias, 0, 2, array('AngularJS'));
                ?>
               <pre>
                 <?php
                 print_r($array); //esto imprime los elementos quitados
                  ?>
               </pre>
               <pre>
                 <?php
                 print_r($tecnologias);
                  ?>
               </pre>
    </div>
    <hr>
    <div class="contenido">
         <?php //array asosiativos
         $persona = array(
           'nombre' => 'Hugo',
           'pais' => 'Arg',
           'profesion' => 'WebDisegn'
         );
             ?>
             <pre>
               <?php
               print_r($persona);
                ?>
             </pre>
             <?php  echo $persona['nombre']; ?>
             <pre>
               <?php
               print_r(array_values($persona)); // convierte los valores del arreglo en numeros
                ?>
             </pre>
             <pre>
               <?php
               print_r(array_keys($persona)); // regresa con numeros los valores puestos originalmente
                ?>
             </pre>
    </div>          


    </div>
  </body>
</html>
