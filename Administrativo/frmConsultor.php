<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel Administrativo - Malbec Consultoria</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>
    <body>
        <form id="InsercaoConsultor" method="get" action="Consultor-insert.php">
		
		<!-- Cadastro Clientes -->
		<fieldset id="Consultor">
			<legend> 
				<b>Cadastro Consultores</b> 
			</legend>
			
				Nome Consultor: 
				<br>
				<input type="text" name="nomeCons">
				<br>
				Formação Consultor:
				<br>
				<input type="text" name="formCons">
				<br>
				Endereço Consultor:
				<br>
				<input type="text" name="endCons">
				<br>
				<input type="submit" value="Gravar">
				<br>
				<a href="Index.php">Início</a>
	
			</fieldset>
        </form>
    </body>
</html>