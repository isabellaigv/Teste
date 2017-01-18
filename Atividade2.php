<html>
<head>
<link rel="stylesheet" href="meuestilo.css" type="text/css">
<Title> Formulario Completo em Html</title>
</head>
 <body>
 <h1> Bem Vindo</h1>
 <h2>Preencha o Formulario abaixo </h2>
 
 <form>
 <div class="row">
    <fieldset class="col-md-8">
 <legend> Dados Pessoais </legend>
 <table cellspacing="10">
  <tr>
	<td>
	  <label for="nome"> Nome: </label>
	  </td>
	  <td align="left">
		<input type="text" name="email">
		</td>
		<td>
		<label for="sobrenome"> Sobrenome: </label>
		</td>
		<td align="left">
		  <input type="text" name="sobrenome">
		</td>
	</tr>
	<tr>
	  <td>
	  <label> Nascimento: </label>
	  </td>
	  <td align="left">
		<input type="text" name="dia" size="2" maxlength="2" value="dd">
		<input type="text" name="mes" size="2" maxlength="2" value="mm">
		<input type="text" name="ano" size="4" maxlength="4" value="aaaa">
		</td>
	</tr>
	<tr>
		<td>
		<label for="rg"> RG: </label>
		</td>
		<td align="left">  
		 <input type="text" name="rg" size="13" maxlength="13">
		</td>
		</tr>
		<tr>
		 <td>
		 <label> CPF: </label>
		 </td>
		 <td align="left">
		  <input type="text" name="cpf" size="9" maxlength="9">
		  - <input type="text" name="cpf2" size="2" maxlength="2">
		  </td>
		 </tr>
		</table>
		</fieldset>
		<br />
		
		</fieldset>
  </div>
		<form>
	<button type="submit" class="botao submit">Enviar</button>
		
		teste de conteudo