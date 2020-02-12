<html>
    <head>
        <meta charset = "utf-8"/>
        <title> Curso php </title>
        <style>
        </style>
    </head>

    <body> 

    <button type="submit" method="get" id="clica" onclick=abrir()>Criar novo botão</buttom>

    <?php

    echo "<script>
    document.getElementById("clica").onclick = function() {abrir()}
    </script>"

    ?>
    
    


</body>

</html>
 