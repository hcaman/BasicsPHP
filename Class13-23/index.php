<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>

      <div class="contenido">
         <?php //array asosiativos
         $persona = array(
           'datos' => array(
             'nombre' => 'Hugo',
             'pais' => 'Arg',
             'profesion' => 'WebDisegn'
            ),
            'lenguajes' => array(
              'front_end' => array('css','html5','javascript', 'jquery'),
              'back_end' => array('php','mysql','python')
            ),
            'profesion' => 'WebDisegn'
            );
         ?>
      <pre>
         <?php
         print_r($persona);
          ?>
      </pre>
      <pre>
          <?php
          print_r($persona['datos']);//solo accede a la parte de datos
           ?>
      </pre>
      <pre>
          <?php
          print_r($persona['lenguajes'] ['front_end'][2]);//se puede llegar a la especifidad del valor
           ?>
      </pre>
      </div>
      <hr>
      <div class="contenido">
              <?php
              $tecnologias = array('CSS', 'HTML', 'JS', 'jQuery');
              $existe = in_array('HTML5', $tecnologias);
              ?>
            <pre>
               <?php
               print_r($existe);
               echo "<br>";
               var_dump($existe);
                ?>
            </pre>
              <?php
                  $persona1 = array(
                    'nombre' => 'Hugo',
                    'pais' => 'Arg',
                    'profesion' => 'WebDisegn');
              ?>
              <?php
                  $existe2 = in_array('Hugo', array_values($persona1));
              ?>
            <pre>
                  <?php
                  print_r($existe2);
                  echo "<br>";
                  var_dump($existe2);
                   ?>
            </pre>
      </div>
      <hr>
      <div class="contenido">
              <?php
              $tecnologias = array('CSS', 'HTML', 'JS', 'jQuery');
              ?>
         <h2>Lenguajes que conozco</h2>
         <ul>
           <?php foreach ($tecnologias as $tecnologia): // en vez de 2 puntos pueden ser { }, sin usar el endforeach, pero para no complicarte con el donde cerre las llaves y eso, es mejor el de endforeach
           ?>
           <li><?php echo $tecnologia; ?></li> <!-- li por dentro asi SI repite los li -->
           <?php endforeach; ?>
         </ul>   <!-- ul por fuera asi NO repite los ul -->
             <?php
             $persona = array(
               'nombre' => 'Hugo',
               'pais' => 'Arg',
               'profesion' => 'WebDisegn');
              ?>
            <h2>Datos personales</h2>
          <ul>
              <?php foreach ($persona as $key => $val){ ?> 
              <!-- se puede usar solo "val" pero no imprime nombre pais profes... -->
                  <li> <?php echo $key . ': ' . $val; ?> </li>
              <?php } ?>
          </ul>
      </div>
      <hr>
      <div class="contenido">
          <?php //array asosiativos
          $persona2 = array(
            'datos' => array(
              'nombre' => 'Hugo',
              'pais' => 'Arg',
              'profesion' => 'WebDisegn'
            ),
            'lenguajes' => array(
              'front_end' => array('css','html5','javascript', 'jquery'),
              'back_end' => array('php','mysql','python')
            ),
            'profesion' => 'WebDisegn'
            );
          ?>
          <pre>
              <?php print_r($persona2); ?>
          </pre>
          <h2>Foreach arreglos multidimensionales</h2>
          <ul>
                <?php foreach ($persona2 ['datos'] as $person):?>
                  <li> <?php echo $person; ?> </li>
                <?php endforeach; ?>
                <?php foreach ($persona2 as $leng):?>
                  <?php if (array_key_exists('front_end', $leng)): ?>
                     <h2>Lenguajes Front End</h2>
                     <?php foreach ($leng ['front_end'] as $front): ?>
                       <li><?php echo $front; ?></li>
                     <?php endforeach; ?>
                  <?php endif; ?>
                <?php endforeach; ?>                
                <?php foreach ($persona2 as $leng):?>
                <?php if (array_key_exists('back_end', $leng)): ?>
                   <h2>Lenguajes Back End</h2>
                   <?php foreach ($leng ['back_end'] as $back): ?>
                     <li><?php echo $back; ?></li>
                   <?php endforeach; ?>
                <?php endif; ?>
              <?php endforeach; ?>
          </ul>
      </div>
      <hr>
      <div class="contenido">
          <?php/* //for crear loops
          for ($i = 0; $i < 100 ; $i++) {
            if ($i == 5) {
              echo "Cinco <br/>";
              continue; //si pongo break rompe el ciclo a llegar a ese numero
            }
            echo $i . '<br/>';
          } ?>
          <hr>
          <?php $tecnologias5 = ['CSS', 'HTML', 'JS', 'jQuery', 'Python']; ?>
          <?php for ($i = 0; $i < count($tecnologias5) $i++) { //esto se puede hacer con el foreach siendo mas sencillo
          }
            echo $tecnologias5[$i] . '<br/>';
          } ?>
          <hr>
          <?php for ($i=0; $i < 500; $i++) {
            if ($i % 2 == 0) {
              echo $i . '<br/>'; //para imprimir numeros pares
            }
          } */?>
      </div>
      <hr>
      <div class="contenido">
          <?php $premier_league = array('chelsea', 'manchester city','manchester unted', 'totteanham', 'arsenal', 'liverpool', 'leicester'); ?>
          <?php $i=0; ?>
          <?php while ($i <= count($premier_league)) {
            if (count($premier_league)>0) {
              echo $premier_league[$i] . '<br/>';
              if ($i+1 === count($premier_league)) {
                echo "Fin";
              }
            } else {
              echo "No hay resultados";
            }
            $i++;
          }?>
      </div>
      <hr>
      <div class="contenido">
          <?php
          function saludar(){
            echo "Hola Amigos!";
          }
          saludar();
          function suma(){
            echo 20+20;
          }
          suma();
          ?>
        <h2>Agenda Telefonica</h2>
          <?php function usuario2(){
             echo "Juan Pablo <br/>";
             echo "1234-1234 <br/>";
           }
           usuario2();
          ?>
      </div>
      <hr>
      <div class="contenido">
            <h2>Agenda Telefonica</h2>
                <?php function usuario1($nombre, $tel){
                  echo $nombre . "<br/>";
                  echo $tel . "<br/>";
                  echo "<hr>";
                }
                usuario1('Juan', '1234-123465');
                usuario1('Miguel', '987-156');
                usuario1('Hugo', '456456-655');
                ?>
      </div>     
      <hr>
      <div class="contenido">
            <h2>Agenda Telefonica</h2>
                <?php function usuario($nombre = 'Sin Nombre' , $tel = 'Sin Numero'){ //valores por default por si faltan valores
                  return $contacto = $nombre . " " . $tel;
                }
                $usuario = usuario('Miguel', '987-156');
                echo $usuario;
                echo "<hr>";
                $usuario2 = usuario('Hugo');
                echo $usuario2;
                echo "<hr>";
                $usuario3 = usuario();
                echo $usuario3;
                ?>
      </div>
      <hr>
      <div class="contenido">
          <h2>Agenda Telefonica</h2>
              <?php $agenda = array();
                function guardarUsuario($nombre,$tel){
                  global $agenda; //necesario crear este goblal porque sino no imprime los datos
                  $agenda[] = array($nombre,$tel);
                }
                guardarUsuario('Juan', '123');
                guardarUsuario('Hugo', '456');
                guardarUsuario('Alma', '789');
                function mostrarUsuario($id){
                global $agenda;
                $usuario = $agenda[$id];
                foreach ($usuario as $user) {
                  echo $user . '<br/>';
                }}
                mostrarUsuario(1);
                echo '<hr><pre>';
                var_dump($agenda);
                echo '</pre>';
              ?>
      </div>
      <hr>
      
      <hr>



    </div>
  </body>
</html>
