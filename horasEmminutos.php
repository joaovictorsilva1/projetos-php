<!--Feito por João Victor,Rafael Joaquim e Yzabella Luiza. Série: 2-DS-->
<?php
$tempoh = filter_input(INPUT_POST, "a");
$tempomin = $tempoh * 60;

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Operações</title>
  <style>
    body {
      background: url(aventura.jpg);
      background-size: 100%;
      position: absolute;
      background-repeat: no-repeat;
    }

    label {
      font-size: 60px;
      color: black;
      position: relative;
      left: 500px;
      font-family: "Lucida sans";
      top: 0px;
    }

    .button {

      color: black;
      position: relative;
      left: 800px;
      top: 0px;
    }



    .texto {
      position: relative;
      font-size: 15px;
      left: 515px;
      top: 250px;
      color: black;
      background-color: #FF7E88;
      text-align: center;
      font-family: "Lucida sans";
      border-radius: 20px;
    }

    .imagem {
      background: url("animado.gif");
      background-size: 100%;
      background-repeat: no-repeat;
      border-radius: 60px;
      width: 200px;
      height: 300px;
      position: relative;
      left: 1200px;
      top: 150px;
    }

    input[type="submit"] {
      font-size: 24px;
      color: white;
      background-color: #FF7E88;
      border-radius: 20px;
      width: 200px;
      height: 50px;
      position: relative;
      right: 100px;
      top: 15px;
      cursor: pointer;
      

    }

    input[type="submit"]:hover {
      background-color: white;
      color: #FF7E88;


    }
  </style>
</head>

<body>
  <div class="texto">
    <h1>O tempo em minutos é: <?= $tempomin; ?> minutos.</h1>
  </div>

  <form method="post">
    <label>Tempo em horas: <input type="text" name="a"></label><br>
    <div class="button">
      <input type="submit" name="envio" value="Calcular">
    </div>
    <div class="imagem"></div>
  </form>

</body>

</html>