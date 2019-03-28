<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula JavaScript - FORMs</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Aula de JavaScript - FORMs</h1>
        
        Valor1: 
        <input type="text" id="txtValor" placeholder="X"/> <br>
        Valor2: 
        <input type="number" id="txtValor2" placeholder="Y"/> <br>
        Resultado: 
        <label id="lblResultado"></label> <br>
        <button onclick="multiplicar()">Multiplicar por 2</button>
        <button onclick="raiz()">Raiz Quadrada</button>
        <button onclick="raizYdeX()">Raiz Y de X</button>
        
        <script>
            var txtValor = document.getElementById("txtValor");
            var txtValor2 = document.getElementById("txtValor2");
            var lblResult = document.getElementById("lblResultado");
            
            function raizYdeX(){
                valor1 = parseFloat(txtValor.value);
                valor2 = parseFloat(txtValor2.value);
                result = Math.pow( valor1 , (1/valor2) );
                lblResult.innerHTML = result;
            }
            
            function raiz(){
                valor = Math.sqrt( parseFloat(txtValor.value) );
                lblResult.innerHTML = valor;
            }
            
            function multiplicar(){
                x = txtValor.value;
                if( isNaN( x ) ){
                    alert("Valor incorreto");
                }else{
                    numero =  parseFloat( x ) * 2;
                    lblResult.innerHTML = numero;
                }
            }
            
        </script>
        
        <hr>
        
        <form action="salvar.php" onsubmit="return validar(this)"  >
            Nome: 
            <input type="text" name="txtNome" />
            <br>
            <input type="submit" value="Salvar" />
        </form>
        <script>
            function validar(frm){
                nome = frm.txtNome.value;
                if ( nome == "" || !isNaN( nome ) ){
                    alert("Nome preenchido incorretamente"); 
                    frm.txtNome.focus();
                    return false;
                }else if ( nome.length < 3 ) {
                    alert("Nome muito pequeno");
                    frm.txtNome.focus();
                    return false;
                }else{
                    return true;
                }
            }
        </script>
        
        
        
    </body>
</html>
















