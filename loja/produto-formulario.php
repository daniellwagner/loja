<?php include 'cabecalho.php';?>
	<h1>Formulario de produto</h1>
	<form action="adiciona-produto.php" method="post">
		<table class="table">
			<tr>
				<td>
					Nome: 
				</td>
				<td>
        			<input class="form-control" type="text" name="nome" /><br/>
				</td>
			</tr>
			<tr>
				<td>
					Preco: 
				</td>
				<td>
            		<input class="form-control" type="number" name="preco" /> <br/>
				</td>
			</tr>
			
			<tr>
				<td>
					Descricao: 
				</td>
				<td>
            		<textarea name="descricao" class="form-control"></textarea>
				</td>
			<tr>	
			<tr>
				<td>
            		<input class="btn btn-primary" type="submit" value="Cadastrar">
				</td>
			</tr>
		</table>
	</form>
<?php include 'rodape.php';?>