<?php
// Salvar Reserva - cadastro e edição

// Conexão com o banco
// $conn já deve estar definido no arquivo que inclui este script

// Evitar aviso de índice não definido
$acao = isset($_POST['acao']) ? $_POST['acao'] : '';

switch($acao) {

    // =========================
    // CADASTRAR RESERVA
    // =========================
    case 'cadastrar':
        $quarto = $_POST['quarto_reserva'];
        $tamanho = $_POST['tamanho_reserva'];
        $cliente_id = $_POST['cliente_id_cliente'];
        $hospedagem_id = $_POST['hospedagem_id_hospedagem'];
        $periodo = $_POST['periodo'];
        $nivel = $_POST['nivel_reserva'];
        $valor = $_POST['valor_reserva'];

        // Query de inserção
        $sql = "INSERT INTO reserva 
                (quarto_reserva, tamanho_reserva, cliente_id_cliente, hospedagem_id_hospedagem, periodo, nivel_reserva, valor_reserva)
                VALUES 
                ('$quarto', '$tamanho', '$cliente_id', '$hospedagem_id', '$periodo', '$nivel', '$valor')";

        $res = $conn->query($sql);

        if($res) {
            echo "<script>alert('Reserva cadastrada com sucesso!');</script>";
            echo "<script>location.href='?page=listar-reserva';</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar reserva: {$conn->error}');</script>";
            echo "<script>location.href='?page=listar-reserva';</script>";
        }
        break;

    // =========================
    // EDITAR RESERVA
    // =========================
    case 'editar':
        if(!isset($_POST['id_reserva']) || empty($_POST['id_reserva'])) {
            echo "<script>alert('ID da reserva não informado!');</script>";
            echo "<script>location.href='?page=listar-reserva';</script>";
            exit;
        }

        $id_reserva = intval($_POST['id_reserva']);
        $quarto = $_POST['quarto_reserva'];
        $tamanho = $_POST['tamanho_reserva'];
        $cliente_id = $_POST['cliente_id_cliente'];
        $hospedagem_id = $_POST['hospedagem_id_hospedagem'];
        $periodo = $_POST['periodo'];
        $nivel = $_POST['nivel_reserva'];
        $valor = $_POST['valor_reserva'];

        // Query de atualização
        $sql = "UPDATE reserva SET
                quarto_reserva='$quarto',
                tamanho_reserva='$tamanho',
                cliente_id_cliente='$cliente_id',
                hospedagem_id_hospedagem='$hospedagem_id',
                periodo='$periodo',
                nivel_reserva='$nivel',
                valor_reserva='$valor'
                WHERE id_reserva=$id_reserva";

        $res = $conn->query($sql);

        if($res) {
            echo "<script>alert('Reserva atualizada com sucesso!');</script>";
            echo "<script>location.href='?page=listar-reserva';</script>";
        } else {
            echo "<script>alert('Erro ao atualizar reserva: {$conn->error}');</script>";
            echo "<script>location.href='?page=listar-reserva';</script>";
        }
        break;

    // =========================
    // EXCLUIR RESERVA
    // =========================
    case 'excluir':
        if(!isset($_REQUEST['id_reserva']) || empty($_REQUEST['id_reserva'])) {
            echo "<script>alert('ID da reserva não informado!');</script>";
            echo "<script>location.href='?page=listar-reserva';</script>";
            exit;
        }

        $id_reserva = intval($_REQUEST['id_reserva']);

        $sql = "DELETE FROM reserva WHERE id_reserva=$id_reserva";
        $res = $conn->query($sql);

        if($res) {
            echo "<script>alert('Reserva excluída com sucesso!');</script>";
            echo "<script>location.href='?page=listar-reserva';</script>";
        } else {
            echo "<script>alert('Erro ao excluir reserva: {$conn->error}');</script>";
            echo "<script>location.href='?page=listar-reserva';</script>";
        }
        break;

    default:
        echo "<script>alert('Ação inválida!');</script>";
        echo "<script>location.href='?page=listar-reserva';</script>";
        break;
}
?>