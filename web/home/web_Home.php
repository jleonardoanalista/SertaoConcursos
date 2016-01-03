<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
    
    <header class="container-fluid">
<a href="index.php"><img src="img/logo.png" class="img-responsive" alt=""/></a>    
	<br/>
	<form>
		<div>
		  <input class="inp1" placeholder="Usuário:" type="text" name="nome" value=""/>
		  <input class="inp1" placeholder="Senha:" type="password" name="senha" value=""/>
		</div>
		
		<div>
			<button type="submit" name="cadastro" class="btn1">Entrar</button>
		</div>
	</form>
</header>
  	
  <nav class="navbar navbar-default">
  <form>
	  <div>
		 <input class="inp2" placeholder="Pesquisar:" type="text" name="pesquisa" value=""/>
	  </div>
	  <div>
		 <button type="submit" name="pesquisar" class="btn1">Pesquisar</button>
	  </div>
  </form>
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="contato.php">Contato</a></li>
          <ul class="dropdown-menu" role="menu">
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li class="divider"></li>
           </ul>
      
      </ul>
	 
	</div>
    <!-- /.navbar-collapse --> 
    
  </div>
  <!-- /.container-fluid --> 
</nav>
  <ul id="produtos" class="container list-inline text-center" >
  	<li class="clearfix list-inline" >
      <h3 class="">Direito Constitucional</h3>
		<a href="#">
			<img src="img/logo.png" class="img-rounded img-responsive" alt=""/>
		</a>
			<span class="btn-warning badge">PREÇO: R$19,90</span> <br> 
     </li> 
     
     <li class="clearfix list-inline" >
		<h3 class="">Direito Penal</h3>
			<a href="#">
				<img src="img/logo.png" class="img-rounded img-responsive" alt=""/>
			</a>
				<span class="btn-warning badge">PREÇO: R$19,90</span> <br>
     </li> 
     
     <li class="clearfix " >
		<h3 class="">Direito Civil</h3>
			<a href="#">
				<img src="img/logo.png" class="img-rounded img-responsive" alt=""/>
			</a>
				<span class="btn-warning badge">PREÇO: R$19,90</span> <br>
     </li> 
	 
	<li class="clearfix list-inline" >
		<h3 class="">Direito Humano</h3>
			<a href="#">
				<img src="img/logo.png" class="img-rounded img-responsive" alt=""/>
			</a>
				<span class="btn-warning badge">PREÇO: R$19,90</span> <br>
     </li> 
     
     <li class="clearfix list-inline" >
		<h3 class="">Português</h3>
			<a href="#">
				<img src="img/logo.png" class="img-rounded img-responsive" alt=""/>
			</a>
				<span class="btn-warning badge">PREÇO: R$19,90</span> <br>
     </li> 
     
     <li class="clearfix " >
		<h3 class="">Matemática</h3>
		<a href="#">
			<img src="img/logo.png" class="img-rounded img-responsive" alt=""/>
		</a>
			<span class="btn-warning badge">PREÇO: R$19,90</span> <br>
     </li> 

  </ul>
 
  </body>
</html>