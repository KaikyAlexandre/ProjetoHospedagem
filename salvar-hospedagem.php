<?php
	switch (@$_REQUEST['acao']) {
		case 'cadastrar':
			$nome= $_POST['nome_hospedagem'];
			$tipo= $_POST['tipo_hospedagem'];
			$estado= $_POST['estado_hospedagem'];
			$cidade= $_POST['cidade_hospedagem'];
			$bairro= $_POST['bairro_hospedagem'];

			$sql = "INSERT INTO hospedagem (nome_hospedagem, tipo_hospedagem, estado_hospedagem, cidade_hospedagem, bairro_hospedagem)
					VALUES ('{$nome}','{$tipo}', '{$estado}','{$cidade}','{$bairro}')";

			$res = $conn->query($sql);

			if ($res == true) {
				print"<script>alert('Cadastrou com sucesso!');</script>";
				print"<script>location.href='?page=listar-hospedagem';</script>";
			}else{
				print"<script>alert('Não cadastrou!');</script>";
				print"<script>location.href='?page=listar-hospedagem';</script>";
			}


			break;
				case 'excluir':
			$sql = "DELETE FROM hospedagem WHERE id_hospedagem=".$_REQUEST['id_hospedagem'];

			$res = $conn->query($sql);

			if ($res == true) {
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listar-hospedagem';</script>";
			}else{
				print "<script>alert('Não excluiu');</script>";
				print "<script>location.href='?page=listar-hospedagem';</script>";
			}
			break;
	}


