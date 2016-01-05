<?php

//require_once 'objetos/ClienteDTO.php';
if(isset($_SESSION['usuario'])){
	$cliente = unserialize ($_SESSION['usuario']);
	if($cliente->getUsu_tipo() ==  "F"){

?>    

<a href="<?php echo URL.'/Cliente/';?>" class="botao">Cliente</a>
<a href="<?php echo URL.'/controller/EntregadorController.php?acao=carregar';?>" class="botao">Entregadores</a>
<a href="<?php echo URL.'/controller/EmpresaController.php?acao=carregar';?>" class="botao">Empresas</a>
<a href="<?php echo URL.'/controller/ProdutoGerenciaController.php?acao=carregar';?>" class="botao">Produto</a>
<a href="<?php echo URL.'/controller/PedidoGerenciaController.php?acao=carregar';?>" class="botao">Pedido</a>
<a href="<?php echo URL.'/Pedido/';?>" class="botao">Relatório</a>


<a class="sair tip" href="<?php echo URL.'/web/login/sair.php';?>">Sair</a>

<?php
	}elseif ($cliente->getUsu_tipo() ==  "C"){
?>

<a href="<?php echo URL.'/Produto/Promocao';?>" class="botao">Promo&ccedil&otildees</a>
<a href="<?php echo URL.'/controller/ProdutoController.php?acao=carregar';?>" class="botao">Menu</a>
<a href="<?php echo URL.'/controller/PedidoController.php?acao=carregar';?>" class="botao">Fazer Pedido</a>
<a href="<?php echo URL.'/controller/PedidoController.php?acao=meusPedidos';?>" class="botao">Acompanhar Pedido</a>

<a class="sair tip" href="<?php echo URL.'/web/login/sair.php';?>">Sair</a>


<?php 
	}
}else{
?>
<form action="<?php echo URL.'/controller/LoginController.php'; ?>" method="POST" name="login" id="login">
    
    <div>
    	<input class="inp1" type="text" name="nome" placeholder="Usuário"/>
      
    	<input class="inp1" type="password" name="senha" placeholder="Senha"/>
    	
    	<button type="submit" name="entrar" class="btnLogin">Entrar</button>
    </div>
</form>
<script type="text/javascript" src="<?php echo URL.'/'.DIR_JS.'/bootstrap.js'; ?>"></script>
<script type="text/javascript" src="<?php echo URL.'/'.DIR_JS.'/jquery-1.11.2.min.js'; ?>"></script>

<?php
}
?>
