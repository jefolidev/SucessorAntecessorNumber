<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>

    <section class = "container2 text-center">
        <h1 class = "res-fin"> Resultado Final </h1>
            <p class = "info">
                <?php 
        
                    $n = $_REQUEST["inputN"] ?? 0;
                    $a = $n - 1;
                    $s = $n + 1;
                    
                        echo "O número digitado foi: $n";
                        echo "<br>O sucessor do número escolhido é: $s";
                        echo "<br>O antecessor do número escolhido é: $a";
                    
                    ?>
        </p>

        <form action = "info.html" method = "POST">
            <input name = "sub2" class="btn btn-primary" type = "submit" placeholder="Voltar">
        </form>
    </section>
</body>
</html>