<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula JavaScript - Eventos</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Aula de JavaScript - Eventos</h1>
        
        <input type="text" id="texto" onkeyup="pegaTexto()" /> <br>
        Nome: <label id="lblNome"></label>
        
        
        
        <script>
            var txtTexto = document.getElementById("texto");
            var lblTexto = document.getElementById("lblNome");
            function pegaTexto(){
                lblTexto.innerHTML = txtTexto.value;
            }
            
        </script>
        
        
        
    </body>
</html>


















