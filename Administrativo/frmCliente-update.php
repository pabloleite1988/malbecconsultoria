<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel Administrativo - Malbec Consultoria</title>
		
    </head>
    <body>
        <form method="get" action="Cliente-update.php">            
            <input type="hidden" name="CodCli" value="<?php echo $_GET['CodCliente']?>"/>
            
            Nome Cliente:
            <br>
            <input type="text" name="NomeCli" value="<?php echo $_GET['NomeCliente']?>"/>
            <br>

            Endereço Cliente:
            <br>
            <input type="text" name="EndCli" value="<?php echo $_GET['EndCliente']?>"/>
            <br>

            Renda Cliente:
            <br>
            <input type="text" name="RendaCli" value="<?php echo $_GET['RendaCliente']?>"/>
            <br>

            <input type="submit" value="Gravar">
            <br>
            <a href="Index.php">Início</a>
        </form>
    </body>
</html>