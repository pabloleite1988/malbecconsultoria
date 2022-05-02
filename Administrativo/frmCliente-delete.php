<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel Administrativo - Malbec Consultoria</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>
    <body>
		<form id="formDelecaoCliente" method="get" action="Cliente-delete.php">
		
		<!-- Deleção Clientes -->
		<fieldset id="Cliente">
			<legend> 
				<b>Exclusão Clientes</b> 
			</legend>
			
				Código Cliente:
            <br>
            <input type="text" name="codCli">
            <br>            
            <input type="submit" value="Excluir">
            <br>
            <a href="Index.php">Início</a>
	
			</fieldset>
        </form>
    </body>
</html>