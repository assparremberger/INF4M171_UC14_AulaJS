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
        <h1>Variáveis - JS</h1>
        
        <div id="tela">
            oi
        </div>
        
        <script>
            console.log("Texto inserido no console");
            
            window.alert("Bom dia!");
            
            var divTela = document.getElementById("tela");
            divTela.innerHTML = "Olá chuchuzinhos!";
            
            
            var x = 2;
            var y = 2.5;
            var nome = "João";
            document.write( "Nome: " + nome + "<br>" + (x+y));
            
            var carro = {modelo: "Uno", cor: "Vermelho", ano:2015};
            document.write("<br>O carro é um "+carro.modelo + 
                    " de cor " + carro.cor + " e foi fabricado em "
                    + carro.ano + " e já possui " + 
                    (2019 - carro.ano) + " anos.");
            
            var pessoa = {
                nome : "Adalto" ,
                idade : 33 ,
                imprimir: function (){
                    document.write("<br>Nome: " + this.nome + 
                            "<br>Idade: " + this.idade);
                }
            };
            
            pessoa.imprimir();
            pessoa.idade = 25;
            pessoa.imprimir();
            
            var x = 2 + "2";
            document.write("<br>");
            document.write(x);
            
            
        
        </script>
        
        
        
        <style>
            #tela{
                width: 200px;  height: 50px;
                border: 1px solid black;
                padding: 5px;
            }
        </style>
        
        
    </body>
</html>















