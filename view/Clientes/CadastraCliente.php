<?php

require_once __DIR__ . '/../../controller/ClienteController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    (new ClienteController())->salvar();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastrar Cliente</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Cadastrar Cliente</h2>

<form method="POST">

<input name="nome" placeholder="Nome" required>
<input name="cpf" placeholder="CPF" required>
<input name="telefone" placeholder="Telefone" required>

<input name="cep" id="cep" placeholder="CEP" required>
<input name="rua" id="rua" placeholder="Rua">
<input name="bairro" id="bairro" placeholder="Bairro">
<input name="cidade" id="cidade" placeholder="Cidade">
<input name="estado" id="estado" placeholder="Estado">

<button>Cadastrar</button>

</form>

<a href="ListaCliente.php">Ver Clientes</a>
<a href="../../index.php">Voltar para a Página Inicial</a>

</div>

<script>
document.getElementById("cep").addEventListener("blur", function () {

    let cep = this.value.replace(/\D/g,'');

    if (cep.length !== 8) return;

    fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(r => r.json())
        .then(data => {

            if (data.erro) return alert("CEP inválido");

            document.getElementById("rua").value = data.logradouro;
            document.getElementById("bairro").value = data.bairro;
            document.getElementById("cidade").value = data.localidade;
            document.getElementById("estado").value = data.uf;
        });
});
</script>

</body>
</html>