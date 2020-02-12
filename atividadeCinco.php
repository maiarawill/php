<html>
    <head>
        <meta charset = "utf-8"/>
        <title> Curso php </title>
        <style>
        </style>
    </head>

    <body> 

    <form action="" method="get">
        <input name="bt1"></input>
        <button type="submit"> ENVIAR NÚMERO </button>
    </form>

    <?php
    $_GET['bt1'];

    $num = $_GET['bt1'];

    for ($num; $num > 0 ; $num --) { 

        $fator = $num;

        echo "$num * $fator" ;

       }

   
    

    ?> 
</body>

</html>
 