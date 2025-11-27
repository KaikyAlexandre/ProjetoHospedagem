<h1>Editar Reserva</h1>

<?php
// Verifica se o id_venda foi passado na URL
if (!isset($_REQUEST['id_reserva'])) {
    die("<h3>ID da reserva não informado!</h3>");
}

$id_reserva = intval($_REQUEST['id_reserva']);

// Busca os dados da reserva
$sql = "SELECT * FROM venda WHERE id_reserva = $id_reserva";
$res = $conn->query($sql);

if ($res->num_rows == 0) {
    die("<h3>Reserva não encontrada!</h3>");
}

$reserva = $res->fetch_object();
?>

<form action="?page=salvar-reserva" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_reserva" value="<?php echo $reserva->id_reserva; ?>">

    <!-- Cliente -->
    <div class="mb-3">
        <label>Cliente
            <select name="cliente_id_cliente" class="form-control">
                <option value="">-= Escolha =-</option>
                <?php
                $sql = "SELECT * FROM cliente";
                $res = $conn->query($sql);
                if ($res->num_rows > 0) {
                    while ($cliente = $res->fetch_object()) {
                        $selected = ($cliente->id_cliente == $reserva->cliente_id_cliente) ? "selected" : "";
                        echo "<option value='{$cliente->id_cliente}' $selected>{$cliente->nome_cliente}</option>";
                    }
                } else {
                    echo "<option>Não há clientes registrados</option>";
                }
                ?>
            </select>
        </label>
    </div>

    <!-- Hospedagem -->
    <div class="mb-3">
        <label>Hospedagem
            <select name="hospedagem_id_hospedagem" class="form-control">
                <option value="">-= Escolha =-</option>
                <?php
                $sql = "SELECT * FROM hospedagem";
                $res = $conn->query($sql);
                if ($res->num_rows > 0) {
                    while ($hospedagem = $res->fetch_object()) {
                        $selected = ($hospedagem->id_hospedagem == $reserva->hospedagem_id_hospedagem) ? "selected" : "";
                        echo "<option value='{$hospedagem->id_hospedagem}' $selected>{$hospedagem->nome_hospedagem}</option>";
                    }
                } else {
                    echo "<option>Não há hospedagens registradas</option>";
                }
                ?>
            </select>
        </label>
    </div>

    <!-- Quarto -->
    <div class="mb-3">
        <label>Quarto
            <input type="number" name="quarto_reserva" class="form-control" value="<?php echo $reserva->quarto_reserva; ?>">
        </label>
    </div>

    <!-- Tamanho -->
    <div class="mb-3">
        <label>Tamanho
            <select name="tamanho_reserva" class="form-control">
                <option value="pequeno" <?php if($reserva->tamanho_reserva=="pequeno") echo "selected"; ?>>Pequeno</option>
                <option value="medio" <?php if($reserva->tamanho_reserva=="medio") echo "selected"; ?>>Médio</option>
                <option value="grande" <?php if($reserva->tamanho_reserva=="grande") echo "selected"; ?>>Grande</option>
            </select>
        </label>
    </div>

    <!-- Nível de plano -->
    <div class="mb-3">
        <label>Nível de plano
            <select name="nivel_reserva" class="form-control">
                <option value="standard" <?php if($reserva->nivel_reserva=="standard") echo "selected"; ?>>Standard</option>
                <option value="superior" <?php if($reserva->nivel_reserva=="superior") echo "selected"; ?>>Superior</option>
                <option value="deluxe" <?php if($reserva->nivel_reserva=="deluxe") echo "selected"; ?>>Deluxe</option>
                <option value="premium" <?php if($reserva->nivel_reserva=="premium") echo "selected"; ?>>Premium</option>
                <option value="suitejunior" <?php if($reserva->nivel_reserva=="suitejunior") echo "selected"; ?>>Suíte Junior</option>
                <option value="suitemaster" <?php if($reserva->nivel_reserva=="suitemaster") echo "selected"; ?>>Suíte Master</option>
            </select>
        </label>
    </div>

    <!-- Período -->
    <div class="mb-3">
        <label>Período
            <input type="number" name="periodo" class="form-control" value="<?php echo $reserva->periodo; ?>">
        </label>
    </div>

    <!-- Valor -->
    <div class="mb-3">
        <label>Valor
            <input type="number" name="valor_reserva" class="form-control" value="<?php echo $reserva->valor_reserva; ?>">
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>