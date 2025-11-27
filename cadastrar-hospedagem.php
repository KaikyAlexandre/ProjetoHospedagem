<h1>Cadastrar Hospedagem</h1>

<form action="?page=salvar-hospedagem" method="POST">
	<input type="hidden" name="acao" value="cadastrar">

	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome_hospedagem" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label>Tipo
			<input type="text" name="tipo_hospedagem" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label>Estado
			<input type="text" name="estado_hospedagem" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label>Cidade
			<input type="text" name="cidade_hospedagem" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label>	Bairro
			<input type="text" name="bairro_hospedagem" class="form-control">
		</label>
	</div>

	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
	
</form>