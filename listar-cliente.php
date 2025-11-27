<h1>Listar Cliente</h1>

<?php
	$sql = "SELECT * FROM cliente";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if ($qtd > 0) {
		print"<p> Encontrou <b>$qtd</b>resultado(s)</p>";
		print"<table class='stark-table'>";
		print"<tr>";
		print"<th>#</th>";
		print"<th>nome</th>";
		print"<th>CPF</th>";
		print"<th>email</th>";
		print"<th>telefone</th>";
		print"<th>Ações</th>";
		print"</tr>";
		while ($row = $res->fetch_object()) {
			print"<tr>";
			print"<td>".$row->id_cliente."</td>";		
			print"<td>".$row->nome_cliente."</td>";		
			print"<td>".$row->cpf_cliente."</td>";		
			print"<td>".$row->email_cliente."</td>";		
			print"<td>".$row->telefone_cliente."</td>";	
			print"<td>
				<button class='stark-btn-editar' onclick=\"
				location.href='?page=editar-cliente&id_cliente={$row->id_cliente}';\">Editar</button>


				<button class='stark-btn-excluir' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-cliente&acao=excluir&id_cliente={$row->id_cliente}';}else{false}\">Excluir</button>
				</td>";
			print"</tr>";
		}
		print"</table>";

	}else{
		print"<p>Não encontou resultado</p>";
	}
