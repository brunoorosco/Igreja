<?php
include_once "../../../_fonts/config/banco.php";
include_once "../../../menu.php";
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="icon" href="<?= $URLBASE.'favicon.ico'?>" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $URLBASE.'_fonts/css/bootstrap.min.css'?>">
 </head>   
    <body>
        <div class="container">
             <form method="post" action="modulos/salvarcliente.php">
                <fieldset>
                    <legend><b>Dados Pessoais</b></legend>
                    <table width="500px">
                    <tr> 
                        <td rowspan="6"><img src="../imagens/pessoa.png"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="txtnome" size="40"></td>
                    </tr>    
                    <tr>
                        <td>Nascimento:</td>
                        <td>    
                            <input type="text" name="txtnascimento" size="15">
                        </td>
                    </tr>
                    <tr>
                        <td>Sexo:</td>
                        <td>
                            <input type="radio" name="optsexo" value="M"> Masculino
                            <input type="radio" name="optsexo" value="F"> Feminino
                        </td>
                    </tr>
                           
                    <tr>
                           <td>Formação:</td>
                          <td>
                    <select name="cboformacao">
                  
                    </select>        
                    </td>
                </tr>
              
           
            </table>    
            </fieldset>
            <input type="submit" value="Salvar Cliente"/>
            <input type="reset" value="Limpar Dados"/>
         </form>
        </div>
    </body>
</html>