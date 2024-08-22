<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicativo WEB - Bhaskara </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Aplicativo WEB - Bhaskara</h1>
    <form method="post" action="">
        <label for="num1">a:</label>
        <input type="number" id="a" name="a">
        <br><br>
        <label for="num2">b:</label>
        <input type="number" id="b" name="b">
        <br><br>
        <label for="num2">c:</label>
        <input type="number" id="c" name="c">
        <br><br>
        <button type="submit" name="submit">Calcular</button>
    </form>

    <?php
        //Obtém os valores dos campos do formulário
        $a=$b=$c=0;
        $a =$_POST['a'];
        $b =$_POST['b'];
        $c =$_POST['c'];

        //Fórmula de Bhaskara
        $delta = $b*$b-4*$a*$c;

        $x1 = (-($b)-(sqrt($delta)))/(2*$a);
        $x2 = (-($b)+(sqrt($delta)))/(2*$a);

        $resultado =$x1;
        $resultado2 =$x2;

        //Exibe o resultado de x¹
        echo"<h3>O resultado de x¹ é:</h3>";
        echo"<p>$resultado</p>";

        //Exibe o resultado de x²
        echo"<h3>O resultado de x² é:</h3>";
        echo"<p>$resultado2</p>";
    
    ?>
</body>
</html> 