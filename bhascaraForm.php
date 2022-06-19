<!-- Calcular através da fórmula de bhascara
Coloque estilos como fundo; cor, tipo e tamanho da fonte -->
<html>
	<head>
		<meta charset="utf-8">
		<title> Báscara </title>
		<style>
		body{background:url(another.jpg);
		background-size: 100% 100%;
		background-repeat: no-repeat;}
		p {font-size:40px;
		text-align: center;}
		h1{font-size:60px;
        color: #fff;
        font-family: "Chalkduster";
		text-align: center;}s

        .titulo{
		 color: #000000;
		 font-size: 20px;
		 font-family: Chalkduster;
		 position: relative;
         top: 10px; left: 10px;
		 border-style: solid;
		 border-color: #ff0000;
	   }

		</style>
	</head>
    </html>

<form action="bhascara.php" method="get"> 
<td class = 'titulo'> 
 <p>Valor A:  <input type="text" name="a"></p>
 <p>Valor B:  <input type="text" name="b"></p>
 <p>Valor C:  <input type="text" name="c"></p>
 <p><input type="submit" /></p>
</form>
</td>
<!-- Fazer o outro arquivo, arquivo bhascara.php
Receber os names do formulário com os gets

Calcular o delta:
$delta = ($b*$b)-((4*$a)*$c);

Calcular X e Y:
$X = (-$b + sqrt ($delta)) / (2*$a);
$Y = (-$b - sqrt ($delta)) / (2*$a);

Mostrar o resultado de $X e $Y com o echo
 -->