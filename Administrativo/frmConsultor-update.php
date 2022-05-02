<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel Administrativo - Malbec Consultoria</title>
		
    </head>
    <body>
        <form method="get" action="Consultor-update.php">            
            <input type="hidden" name="CodConsultor" value="<?php echo $_GET['CodConsultor']?>"/>
            
            Nome Consultor:
            <br>
            <input type="text" name="NomeConsultor" value="<?php echo $_GET['NomeConsultor']?>"/>
            <br>

            Formação Consultor:
            <br>
            <input type="text" name="FormConsultor" value="<?php echo $_GET['FormConsultor']?>"/>
            <br>

            Endereço Consultor:
            <br>
            <input type="text" name="EndConsultor" value="<?php echo $_GET['EndConsultor']?>"/>
            <br>

            <input type="submit" value="Gravar">
            <br>
            <a href="Index.php">Início</a>
        </form>
    </body>
</html>