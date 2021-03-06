<?php include 'cabecalho.php';
include ("conecta.php");
include ("banco-categoria.php");
include ("logica-usuario.php");

verificaUsuario();

$categorias = listaCategorias($conexao);
?>
	<h1>Formulario de produto</h1>
	<form action="adiciona-produto.php" method="post">
		<table class="table">
			<tr>
				<td>
					Nome: 
				</td>
				<td><input class="form-control" type="text" name="nome" /><br/></td>
			</tr>
			<tr>
				<td>
					Preco: 
				</td>
				<td><input class="form-control" type="number" name="preco" /> <br/></td>
			</tr>
			
			<tr>
				<td>
					Descricao: 
				</td>
				<td><textarea name="descricao" class="form-control"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="usado" value="true"/> Usado
			</tr>
			
			<tr>
				<td>Categoria</td>
				<td>
					<select name="categoria_id" class="form-control">
    					<?php foreach ($categorias as $categoria) : ?>
    						<option value="<?= $categoria['id'] ?>">
    							<?=$categoria['nome']?>
    						</option>
    					<?php endforeach ?>
					</select>
				</td>
			</tr>	
			<tr>
				<td>
            		<input class="btn btn-primary" type="submit" value="Cadastrar">
				</td>
			</tr>
		</table>
	</form>
<?php include 'rodape.php';?>