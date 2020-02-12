<html>
    <head>
        <meta charset = "utf-8"/>
        <title> Curso php </title>
        <style>
        </style>
    </head>

    <body> 

    <form action="" method="get">
        <input name="botao"></input>
        <button type="submit"> ENVIAR DADOS </button>
    </form>

    <?php
    $_GET['botao'];
    $_POST['botao'];

    $nota1 = $_GET['botao'];

    echo "$nota1"
    

    ?>


</body>

</html>
 