<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Software House SoftPlus</title>
        
        <link href="<?php echo URL.'/'.DIR_CSS.'/style.css'; ?>" rel="stylesheet" type="text/css">
        
        <!-- bootstrap  -->
        <script type="text/javascript" src="<?php echo URL.'/'.DIR_JS.'/jquery-1.11.2.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo URL.'/'.DIR_JS.'/bootstrap.js'; ?>"></script>
        
        <script type="text/javascript" src="<?php echo URL.'/'.DIR_JS.'/geral.js'; ?>"></script>
        
    </head>
    <body>
        
           <header class="container-fluid">
		<a href="index.php"><img style="top:60px; width:350px;" src="<?php echo URL.'/'.DIR_IMG.'/logo.png'?>" class="img-responsive" alt=""/></a>   
	</header>
   	
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