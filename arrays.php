<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula JavaScript - Arrays</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Aula de JavaScript - Arrays</h1>
        
        <script>
            var carros=["Uno", "Doblo", "Kangoo"];
            document.write("carros: " + carros);
            document.write("<br>Segundo item: "+ carros[1]);
            carros[2] = "Sandero";
            document.write("<br>Carros: " + carros);
            document.write("<br>Todas de carros: " + carros.length);
            document.write("<br>Último: " + carros[carros.length-1]);
            carros.push("Fusca");
            document.write("<br>carros: " + carros);
            
            var numeros1 = new Array(5, 25, 28, 42);
            var soma = 0.0;
            for (var num in numeros1) {
                soma = (soma + num);
            }
            document.write("<br>Soma: " + soma);

            
        
        
        
        
        
        
        var numeros1 = [5, 25, 28, 42];
            var soma = 0;
            for (var num in numeros1) {
                soma = soma + numeros1[num];
            }
            document.write("<br>Soma: " + soma);
        </script>
        
        
        
        
        <br><br>
        <hr>
        Produto:
        <input type="text" id="txtProduto" onkeyup="contar()" />
        <label id="contLetras"></label> <br>
        <button onclick="adicionar()">Adicionar</button> <br> <br>
        <div id="divLista"></div> 
        <script>
            var contLetras = document.getElementById("contLetras");
            var txtProduto = document.getElementById("txtProduto");
            var divLista = document.getElementById("divLista");
            var lista = [];
            function contar(){
                nome = txtProduto.value;
                contLetras.innerHTML = nome.length;
            }
            function adicionar(){
                nome = txtProduto.value;
                lista.push(nome);
                conteudo = "";
                for (var i = 0; i < lista.length; i++) {
                    conteudo = conteudo + lista[i] + "<br>";
                }
                divLista.innerHTML = conteudo;
                contLetras.innerHTML = "";
                txtProduto.value = "";
            }
        </script>
        <style>
            #contLetras, #divLista{
                color: blue;
            }
        </style>
        
    </body>
</html>


















