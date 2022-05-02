<!DOCTYPE html>

<html>
    <head>
        
		<meta charset="UTF-8">
        <title>Painel Administrativo</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
		
    </head>
    <body>
        <H1> 
			Painel Administrativo - Malbec Consultoria 
			
		</H1>
		
			
		<form>
		
		<!-- Área Dados Clientes -->
		<fieldset id="Cliente">
			<legend> 
				<b>Área Clientes</b> 
			</legend>
			
			<br>
			<a href = "frmCliente.php"> Cadastrar Cliente </a><br><br>
			<a href = "frmCliente-delete.php"> Excluir Cliente </a><br><br>
			<a href = "Cliente-selectall.php"> Listar Clientes </a><br><br>
		
		</fieldset>
		
		<!-- Área Dados Consultores -->
		<fieldset id="Consultor">
			<legend> 
				<b>Área Consultores</b> 
			</legend>
			
			<br>
			<a href = "frmConsultor.php"> Cadastrar Consultor </a><br><br>
			<a href = "frmConsultor-delete.php"> Excluir Consultor </a><br><br>
			<a href = "Consultor-selectall.php"> Listar Consultores </a><br><br>
		
		</fieldset>
		
		<!-- Área Dados Visitas -->
		<fieldset id="Visitas">
			<legend> 
				<b>Área Visitas</b> 
			</legend>
		
			<br>
			<a href = "frmVisitas.php"> Cadastrar Visita </a><br><br>
			<a href = "frmVisitas-delete.php"> Excluir Visita </a><br><br>
			<a href = "Visitas-selectall.php"> Listar Visitas </a><br><br>
		
		</fieldset>
		
		<!-- Área Dados Cursos -->
		<fieldset id="Cursos">
			<legend> 
				<b>Área Cursos</b> 
			</legend>
			
			<br>
			<a href = "frmCursos.php"> Cadastrar Curso </a><br><br>
			<a href = "frmCursos-delete.php"> Excluir Curso </a><br><br>
			<a href = "Cursos-selectall.php"> Listar Cursos </a><br><br>
		
		</fieldset>
		</form>
    </body>
	<footer>
		<H4>
			<center>(Retorno ao site <a href = "../FrontEnd/index.html"> Malbec Consultoria </a>)<br><br></center>
		</H4>
	</footer>
</html>