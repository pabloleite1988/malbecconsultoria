<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel Administrativo - Malbec Consultoria</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>
    <body>
        <form method="get" action="Visita-insert.php">
		
		<!-- Cadastro Clientes -->
		<fieldset id="Visitas">
			<legend> 
				<b>Cadastro Visita</b> 
			</legend>
				
				<input type="hidden" name="CodCons" value="<?php echo$_GET['Consultor']?>">
				<input type="hidden" name="CodSol" value="<?php echo$_GET['Atendimento']?>">
				
				Descrição Visita:
				<br>
				<input type="text" name="DescVis">
				<br>
				
				Horário Agendado:
				<br>
				<input type="text" name="HorAgendado">
				<br>
				
				Data Agendada:
				<br>
				<input type="text" name="DataAgenda">
				<br>
				
				<input type="submit" value="Gravar">
				<br>
				<a href="Index.php">Início</a>
	
			</fieldset>
        </form>
    </body>
</html>