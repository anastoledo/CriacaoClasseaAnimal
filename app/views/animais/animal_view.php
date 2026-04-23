<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Animal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h3>Detalhes do Animal: <?= $animal['nome'] ?></h3>
        </div>
        <div class="card-body">
            <p><strong>Espécie:</strong> <?= $animal['especie'] ?></p>
            <p><strong>Raça:</strong> <?= $animal['raca'] ?></p>
            <p><strong>Sexo:</strong> <?= $animal['sexo'] ?></p>
            <p><strong>Idade:</strong> <?= $animal['idade'] ?></p>
            <p><strong>Porte:</strong> <?= $animal['porte'] ?></p>
            <p><strong>Saúde:</strong> <?= $animal['historico_saude'] ?? '' ?></p>
            <p><strong>Castrado:</strong> <?= $animal['castrado'] ?></p>
            <p><strong>Status atual:</strong> <span class="badge bg-secondary"><?= $animal['status'] ?></span></p>
        </div>
        <div class="card-footer">
            <a href="<?= URL_BASE ?>/animais" class="btn btn-secondary">Voltar para a Lista</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>