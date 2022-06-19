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
        font-family: "candara";
		text-align: center;}
		</style>
	</head>
	<body>
		<?php
		$a = $_GET['a'];
		$b = $_GET['b'];
		$c = $_GET['c'];
        $delta = ($b*$b)-((4*$a)*$c);

        // Calcular X e Y:
        $X = (-$b + sqrt ($delta)) / (2*$a);
        $Y = (-$b - sqrt ($delta)) / (2*$a);
 
	echo "<p> Os valores de x são: </p>"; 
	echo "<h1>$X e $Y</h1>";
		
		?>
	</body>
</html>