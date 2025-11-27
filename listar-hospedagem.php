<h1>Listar Hospedagem</h1>

<?php
	$sql = "SELECT * FROM hospedagem";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if ($qtd > 0) {
		print"<p> Encontrou <b>$qtd</b>resultado(s)</p>";
		print"<table class='stark-table'>";
		print"<tr>";
		print"<th>#</th>";
		print"<th>nome</th>";
		print"<th>tipo</th>";
		print"<th>estado</th>";
		print"<th>cidade</th>";
		print"<th>bairro</th>";
		print"<th>ações</th>";
		print"</tr>";
		while ($row = $res->fetch_object()){
			print"<tr>";
			print"<td>".$row->id_hospedagem."</td>";		
			print"<td>".$row->nome_hospedagem."</td>";		
			print"<td>".$row->tipo_hospedagem."</td>";		
			print"<td>".$row->estado_hospedagem."</td>";	
			print"<td>".$row->cidade_hospedagem."</td>";	
			print"<td>".$row->bairro_hospedagem."</td>";	
			print"<td>
				<button class='stark-btn-editar' onclick=\"
				location.href='?page=editar-hospedagem&id_hospedagem={$row->id_hospedagem}';\">Editar</button>


				<button class='stark-btn-excluir' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-hospedagem&acao=excluir&id_hospedagem={$row->id_hospedagem}';}else{false}\">Excluir</button>
				</td>";
				print"</tr>";
		}
		print"</table>";

	}else{
		print"<p>Não encontou resultado</p>";
	}
