<?php
include './conexao.php';
include './calendario.php';

$info = [
  'tabela' => 'tarefas',
  'data' => 'data',
  'titulo' => 'titulo',
  'link' => 'link'
];

 ?>
<!DOCTYPE html>
<html lang=pt-br dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calendar.io</title>
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>
  <body>
    <div class="calendario">
      <?php
        $eventos = montaEventos($info);
        montaCalendario($eventos) ;
      ?>
      <div class="legendas">
        <span class="legenda"><span class="blue"></span> Eventos</span>
        <span class="legenda"><span class="red"></span> Hoje</span>
      </div>

      </div>
    </div>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
     <script type="text/javascript" src="./assets/js/main.js"></script>
  </body>

</html>
