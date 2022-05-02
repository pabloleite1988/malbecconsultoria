<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel Administrativo - Malbec Consultoria</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>
    <body>
		<form id="formDelecaoConsultor" method="get" action="Consultor-delete.php">
		
		<!-- Deleção Consutores -->
		<fieldset id="Consultor">
			<legend> 
				<b>Exclusão Consultores</b> 
			</legend>
			
				Código Consultor:
            <br>
            <input type="text" name="CodConsultor">
            <br>            
            <input type="submit" value="Excluir">
            <br>
            <a href="Index.php">Início</a>
	
			</fieldset>
        </form>
    </body>
</html>