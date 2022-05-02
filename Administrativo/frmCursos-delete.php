<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel Administrativo - Malbec Consultoria</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>
    <body>
		<form id="formDelecaoCurso" method="get" action="Curso-delete.php">
		
		<!-- Deleção Consutores -->
		<fieldset id="Cursos">
			<legend> 
				<b>Exclusão Cursos</b> 
			</legend>
			
				Código Curso:
            <br>
            <input type="text" name="CodCurso">
            <br>            
            <input type="submit" value="Excluir">
            <br>
            <a href="Index.php">Início</a>
	
			</fieldset>
        </form>
    </body>
</html>