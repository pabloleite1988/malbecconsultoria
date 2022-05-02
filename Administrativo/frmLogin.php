<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Área Autenticação - Malbec Consultoria</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
	</head>
    <body>
        <form method="post" action="login.php"> 
		
		<!-- Autenticar Usuário -->
		<fieldset id="Autenticar">
			<legend> 
				<b>Autenticação Usuário</b> 
			</legend>
            
				Usuário:
				<br>
				<input type="text" name="NomeUsuario"/>
				<br>

				Senha:
				<br>
				<input type="password" name="SenhaUsuario"/>
				<br>

				<input type="submit" value="Login">
				
        </fieldset>    
        </form>
		
		
    </body>
</html>