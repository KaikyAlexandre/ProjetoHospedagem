<h1>Listar reserva</h1>

<?php
$sql = "
    SELECT 
        r.id_reserva,
        r.quarto_reserva,
        r.tamanho_reserva,
        r.periodo,
        r.nivel_reserva,
        r.valor_reserva,
        c.nome_cliente,
        h.nome_hospedagem
    FROM reserva r
    INNER JOIN cliente c ON r.cliente_id_cliente = c.id_cliente
    INNER JOIN hospedagem h ON r.hospedagem_id_hospedagem = h.id_hospedagem  ";

$res = $conn->query($sql);

if (!$res) {
    die('<b>Erro na consulta SQL:</b> ' . $conn->error);
}

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p>Encontrou <b>$qtd</b> venda(s)</p>";
    print "<table class='stark-table'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Quarto</th>";
    print "<th>Tamaho</th>";
    print "<th>Periodo</th>";
    print "<th>Nivel</th>";
    print "<th>Cliente</th>";
    print "<th>Hospedagem</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>{$row->id_reserva}</td>";
        print "<td>{$row->quarto_reserva}</td>";
        print "<td>R$ {$row->tamanho_reserva}</td>";
        print "<td>{$row->periodo}</td>";
        print "<td>{$row->nivel_reserva}</td>";
        print "<td>{$row->nome_cliente}</td>";
        print "<td>{$row->nome_hospedagem}</td>";
        print"<td>
                    <button class='stark-btn-editar' onclick=\"
                    location.href='?page=editar-reserva&id_reserva={$row->id_reserva}';\">Editar</button>


                    <button class='stark-btn-excluir' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-reserva&acao=excluir&id_reserva={$row->id_reserva}';}else{false;}\">Excluir</button>
                    </td>"; 
    }

    print "</table>";
} else {
    print "<p> Nenhuma reserva encontrada.</p>";
}
?>
