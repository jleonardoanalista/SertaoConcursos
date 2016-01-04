<!DOCTYPE html>
<html lang="en">
  <head>
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
<script type='text/javascript' src='cep.js'></script>
<script type="text/javascript" src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
<script type="text/javascript" src="jquery.maskedinput/dist/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="jQueryValidate/jquery-validate.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#cpf').mask('999.999.999-99');
		$('#cep').mask('99999-999');
		$('#telefone').mask('(99)9999-9999');
		$('#data').mask('99/99/9999');
	});
</script>	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
<!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
	        <li><a href="index.php">Home</a></li>
			<li><a href="contato.php">Contato</a></li>
          <ul class="dropdown-menu" role="menu">
		    <li><a href="index.php">Home</a></li>
			<li><a href="contato.php">Contato</a></li>
            <li class="divider"></li>
           </ul>
      
      </ul>
    </div>
  <form role="form" class="container" id="form" name="" class="formulario" method="post">
    <br/>
    <div class="form-group">
      <input placeholder="Nome:" type="text" class="form-control" name="nome" pattern="[a-zA-ZÃ£-ÃµÃƒ-Ã•Ã¡-ÃºÃ�-ÃšÃ¢-Ã»Ã‚-Ã›Ã -Ã¹Ã€-Ã™\s]+$" value="" required/>
    </div>
    
	<br/>
	<div class="form-group">
      <input placeholder="CPF:" type="text" class="form-control" name="cpf" id="cpf" value="" required/>
    </div>
	
	<br/>	
	<div class="form-group">
      <input placeholder="CEP:" type="text" class="form-control" name="cep" id="cep" onBlur="ValidaCep(form1.cep)" onBlur="ValidaCep(form1.cep)" required/>
    </div>
	
	<br/>
	<div class="form-group">
      <input placeholder="Logradouro:" type="text" class="form-control" name="rua" id="rua" pattern="[a-zA-ZÃ£-ÃµÃƒ-Ã•Ã¡-ÃºÃ�-ÃšÃ¢-Ã»Ã‚-Ã›Ã -Ã¹Ã€-Ã™0-9\s]+$" value="" required/>
    </div>
	
	<br/>
	<div class="form-group">
      <input placeholder="NÃºmero:" type="text" class="form-control" name="numero" id="numero" pattern="[0-9\s]+$" value="" required/>
    </div>
	
	<br/>
	<div class="form-group">
      <input placeholder="Bairro:" type="text" class="form-control" name="bairro" id="bairro" pattern="[a-zA-ZÃ£-ÃµÃƒ-Ã•Ã¡-ÃºÃ�-ÃšÃ¢-Ã»Ã‚-Ã›Ã -Ã¹Ã€-Ã™0-9\s]+$" value="" required/>
    </div>
	
	<br/>
	<div class="form-group">
      <input placeholder="Cidade:" type="text" class="form-control" name="cidade" id="cidade" pattern="[a-zA-ZÃ£-ÃµÃƒ-Ã•Ã¡-ÃºÃ�-ÃšÃ¢-Ã»Ã‚-Ã›Ã -Ã¹Ã€-Ã™0-9\s]+$" value="" required/>
    </div>
	
	<br/>
	<div class="form-group">
      <input placeholder="Estado:" type="text" class="form-control" name="estado" id="estado" pattern="[a-zA-ZÃ£-ÃµÃƒ-Ã•Ã¡-ÃºÃ�-ÃšÃ¢-Ã»Ã‚-Ã›Ã -Ã¹Ã€-Ã™0-9\s]+$" value="" required/>
    </div>
	
	<br/>
	<div class="form-group">
      <input placeholder="Telefone/Celular:" type="text" class="form-control" name="telefone" id="telefone" value="" required/>
    </div>
	
	<br/>
	<div class="form-group">
      <input placeholder="Data de Nascimento:" class="form-control" name="nascimento" id="data" value="" required/>
    </div>
   
	<br/>
   	<div class="form-group">
      <input placeholder="E-mail" type="email" class="form-control" name="email" id="mail" value="" required/>
    </div>
	
	<br/>
   	<div class="form-group">
      <input placeholder="UsuÃ¡rio:" type="usuario" class="form-control" name="usuario" id="usuario" value="" required/>
    </div>

	<br/>
   	<div class="form-group">
      <input placeholder="Senha:" type="password" class="form-control" name="senha" id="senha" value="" required/>
    </div>

    <div class="form-group">
    <button type="submit" name="cadastro" class="btn">Cadastrar</button>
    </div>
    
  </form> 
  </body>
</html>