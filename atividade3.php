<html>
    <head>
        <meta charset = "utf-8"/>
        <title> Terceira atividade </title>
        <style>
        </style>
    </head>

    <body> 


<form action="" method="get">
        <input name="bt1"></input>
        <input name="bt2"></input>
        <input name="bt3"></input>
        <button type="submit"> ENVIAR NOTAS </button>
    </form>

    <?php
    $_GET['bt1'];
    $_GET['bt2'];
    $_GET['bt3'];

    $nota1 = $_GET['bt1'];
    $nota2 = $_GET['bt2'];
    $nota3 = $_GET['bt3'];

    $media = ($nota1 + $nota2 + $nota3)/3;

    echo "$media";
    

    ?>


</body>

</html>
 