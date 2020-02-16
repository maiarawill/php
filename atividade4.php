<html>
    <head>
        <meta charset = "utf-8"/>
        <title> Quarta atividade </title>
        <style>
        </style>
    </head>

    <body> 

    <button id="clica"> sadsa </button>
            <div id="lugardebotao"> </div> 
        <?php 
            $a = "document.getElementById('lugardebotao').innerHTML += '<button>sadsa</button>'";
            echo "<script>document.getElementById('clica').onclick = function(){".$a."} </script>";
        ?>
    
    


</body>

</html>
 