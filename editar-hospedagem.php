<h1>Editar Hospedagem</h1>

<?php
	$sql = "SELECT * FROM hospedagem WHERE id_hospedagem=".$_REQUEST['id_hospedagem'];

	$res = $conn->query($sql);

	$row = $res->fetch_object();
?>

<form action="?page=salvar-hospedagem" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_hospedagem" value="<?php print $row->id_hospedagem;?>">
	
	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome_hospedagem" class="form-control" value="<?php print $row->nome_hospedagem; ?>>">
		</label>
	</div>

	<div class="mb-3">
		<label>Tipo
			<input type="text" name="tipo_hospedagem" class="form-control" value="<?php print $row->tipo_hospedagem; ?>">
		</label>
	</div>

	<div class="mb-3">
		<label>Estado
			<input type="text" name="estado_hospedagem" class="form-control" value="<?php print $row->estado_hospedagem; ?>">
		</label>
	</div>

	<div class="mb-3">
		<label>Cidade
			<input type="text" name="cidade_hospedagem" class="form-control" value="<?php print $row->cidade_hospedagem; ?>">
		</label>
	</div>

	<div class="mb-3">
		<label>	Bairro
			<input type="text" name="bairro_hospedagem" class="form-control" value="<?php print $row->bairro_hospedagem; ?>">
		</label>
	</div>

	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
	
</form>
</form>