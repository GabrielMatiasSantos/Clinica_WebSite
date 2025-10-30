<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style-geral.css" rel="stylesheet" type="text/css">
	<link href="css/style-mensagem.css" rel="stylesheet" type="text/css">
	<link href="css/media-queries-geral.css" rel="stylesheet" type="text/css">
	<link href="css/media-queries-mensagem.css" rel="stylesheet" type="text/css">
	<title>Home</title>
    
</head>


<?php include_once("topo.php")?>	


<div id="mensagem-alinhar">

    <div id="mensagem-item">
	
	    <form action="https://formsubmit.co/clinicaentresaude@gmail.com" method="POST">
		
		    <label for="mensagem-nome" class="label">Seu nome:</label> <br>
		    <input id="mensagem-nome" class="input" name="Nome" required />
		    <br>
		    <label for="mensagem-email">Seu e-mail:</label> <br>
		    <input id="mensagem-email" class="input" name="E-mail" required />
		    <br>
		    <label for="mensagem" class="label">Sua mensagem:</label><br>
			<textarea id="mensagem" name="Mensagem" required></textarea>
			<br>
			<button type="submit" id="botao">Enviar</button>
			
			<input type="hidden" name="_subject" value="Nova Mensagem">
			<input type="text" name="_honey" style="display:none">
			<input type="hidden" name="_captcha" value="false">
			<input type="hidden" name="_next" method="POST" value="http://localhost/clinica_rosineis/principal-obrigado.php">
			
		</form>
		
	</div>

</div>


<?php include_once("rodape.php")?>	