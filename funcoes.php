<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula JavaScript</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Aula de JavaScript - Funções</h1>
        
        <script>
            function somar( x , y){
                var soma = x + y;
                return soma;
            }
            document.write("2 + 3 = " + somar(2,3) );
            document.write("<br>" + somar(25, 128) );
        
        </script>
        
    </body>
</html>



















