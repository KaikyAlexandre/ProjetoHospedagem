<h1>Cadastrar Reserva</h1>

<form action="?page=salvar-reserva" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    
    <div class="mb-3">
        <label>Cliente
            <select name="cliente_id_cliente" class="form-control" required>
                <option value="">-= Escolha =-</option>
                <?php
                $sql = "SELECT * FROM cliente";
                $res = $conn->query($sql);
                if ($res->num_rows > 0) {
                    while ($cliente = $res->fetch_object()) {
                        print "<option value='{$cliente->id_cliente}'>{$cliente->nome_cliente}</option>";
                    }
                } else {
                    print "<option>Não há clientes registrados</option>";
                }
                ?>
            </select>
        </label>
    </div>

    <!-- Hospedagem -->
    <div class="mb-3">
        <label>Hospedagem
            <select name="hospedagem_id_hospedagem" class="form-control" required>
                <option value="">-= Escolha =-</option>
                <?php
                $sql = "SELECT * FROM hospedagem";
                $res = $conn->query($sql);
                if ($res->num_rows > 0) {
                    while ($hospedagem = $res->fetch_object()) {
                        print "<option value='{$hospedagem->id_hospedagem}'>{$hospedagem->nome_hospedagem}</option>";
                    }
                } else {
                    print "<option>Não há hospedagens registradas</option>";
                }
                ?>
            </select>
        </label>
    </div>

    <!-- Quarto -->
    <div class="mb-3">
        <label>Quarto
            <input type="number" name="quarto_reserva" class="form-control" required>
        </label>
    </div>

    <!-- Tamanho -->
    <div class="mb-3">
        <label>Tamanho
            <select name="tamanho_reserva" class="form-control" required>
                <option value="pequeno">Pequeno</option>
                <option value="medio">Médio</option>
                <option value="grande">Grande</option>
            </select>
        </label>
    </div>

    <!-- Nível de plano -->
    <div class="mb-3">
        <label>Nível de plano
            <select name="nivel_reserva" class="form-control" required>
                <option value="standard">Standard</option>
                <option value="superior">Superior</option>
                <option value="deluxe">Deluxe</option>
                <option value="premium">Premium</option>
                <option value="suitejunior">Suíte Junior</option>
                <option value="suitemaster">Suíte Master</option>
            </select>
        </label>
    </div>

    <!-- Período -->
    <div class="mb-3">
        <label>Período
            <input type="number" name="periodo" class="form-control" required>
        </label>
    </div>

    <!-- Valor -->
    <div class="mb-3">
        <label>Valor
            <input type="number" name="valor_reserva" class="form-control" required>
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Cadastrar Reserva</button>
    </div>
</form>