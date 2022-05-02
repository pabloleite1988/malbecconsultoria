<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel Administrativo - Malbec Consultoria</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>
    <body>
        <form id="InsercaoCliente" method="get" action="Cliente-insert.php">
		
		<!-- Cadastro Clientes -->
		<fieldset id="Cliente">
			<legend> 
				<b>Cadastro Clientes</b> 
			</legend>
			
				Nome Cliente: 
				<br>
				<input type="text" name="nomeCli">
				<br>
				Endereço Cliente:
				<br>
				<input type="text" name="endCli">
				<br>
				Renda Cliente:
				<br>
				<input type="text" name="rendaCli">
				<br>
				<input type="submit" value="Gravar">
				<br>
				<a href="Index.php">Início</a>
	
			</fieldset>
        </form>
    </body>
</html>