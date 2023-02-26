<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="icon.png" sizes="16x16 32x32 48x48">
    <title>sumar dos numeros </title>
    <style>
        .container {
	width: 500px;
	margin: 0 auto;
	text-align: center;
}

input[type="number"] {
	padding: 10px;
	margin: 10px;
	border-radius: 5px;
	border: none;
	box-shadow: 1px 1px 1px grey;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: white;
	padding: 10px;
	border-radius: 5px;
	border: none;
	cursor: pointer;
}

    </style>
</head>
<body>
    <div class="container">
		<h1>Suma de dos números</h1>
		<form method="post" action="sumar2numeros.php">
			<label for="num1">Número 1:</label>
			<input type="number" id="num1" name="num1" required>
<br>
			<label for="num2">Número 2:</label>
			<input type="number" id="num2" name="num2" required>
<br>
			<input type="submit" value="Sumar">
		</form>


        <?php
			if(isset($_POST['num1']) && isset($_POST['num2'])) {
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$resultado = $num1 + $num2;
				echo "<h1>El resultado de la suma es: $resultado</h1>";
			}
			else {
				echo "<h1>No se han recibido los números para sumar</h1>";
			}
		?>
    </div>
</body>
</html>