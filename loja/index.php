<?php include 'cabecalho.php';
include("logica-usuario.php"); ?>

<?php if(isset($_GET["logout"]) && $_GET["logout"] == true) { ?>
	<p class="alert-sucess"> Deslogado com sucesso! </p>
<?php }?>

<?php if(isset($_GET["login"]) && $_GET["login"] == true) { ?>
	<p class="alert-sucess"> Logado com sucesso! </p>
<?php }?>

<?php if(isset($_GET["login"]) && $_GET["login"] == false) { ?>
	<p class="alert-danger"> Usu�rio ou senha inv�lida! </p>
<?php }?>

<?php if(isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"] == true) { ?>
	<p class="alert-danger"> Voce nao tem acesso a essa funcionalidade! </p>
<?php }?>

	<h1> Bem vindo! </h1>
	
	<?php if(usuarioEstaLogado()) {?>
		<p class="text-success"> Voce esta logado como <?=usuarioLogado()?>.</p> 
		<a href="logout.php">Deslogar</a>
	<?php } else { ?>
    	<h2>Login</h2>
    	<form action="login.php" method="post">
        	<table class="table">
        		<tr>
        			<td>Email</td>
        			<td><input class="form-control" type="email" name="email"></td>
        		<tr>
        		
        		<tr>
        			<td>Senha</td>
        			<td><input class="form-control" type="password" name="senha"> </td>
        		</tr>
        		
        		<tr>
        			<td><button class="btn btn-primary">Login</button></td>
        		</tr>
        	</table>
    	</form>
    <?php }?>
<?php include 'rodape.php';?>
