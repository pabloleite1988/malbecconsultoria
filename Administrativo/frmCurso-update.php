<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>painel Administrativo - Malbec Consultoria</title>
    </head>
    <body>
        <form method="get" action="Curso-update.php">            
            <input type="hidden" name="CodCurso" value="<?php echo$_GET['CodCurso']?>">
            Nome Curso:
            <br>
            <input type="text" name="NomeCurso" value="<?php echo $_GET['NomeCurso']?>">
            <br>

			Descrição Curso:
            <br>
            <input type="text" name="DescCurso" value="<?php echo $_GET['DescCurso']?>">
            <br>	
			
			Agenda:
            <br>
            <input type="text" name="Agenda" value="<?php echo $_GET['Agenda']?>">
            <br>
			
            <input type="submit" value="Gravar">
            <br>
            <a href="Index.php">Início</a>
        </form>
    </body>
</html>