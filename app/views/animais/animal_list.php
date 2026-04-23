<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Lista de Animais</h2>
    <?php if (isset($erro) && !empty($erro)): ?>
        <div class="alert alert-danger" role="alert">
            <?= $erro ?>
        </div>
    <?php endif; ?>
    <a href="<?= URL_BASE ?>/animais/cadastrar" class="btn btn-primary mb-3">Novo Animal</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animais as $a): ?>
                <tr>
                    <td><?= $a['nome'] ?></td>
                    <td><?= $a['especie'] ?></td>
                    <td><?= $a['status'] ?></td>
                    <td>
                        <a href="<?= URL_BASE ?>/animais/visualizar?id=<?= $a['id'] ?>">Ver</a>
                        <a href="<?= URL_BASE ?>/animais/editar?id=<?= $a['id'] ?>">Editar</a>
                        <a href="<?= URL_BASE ?>/animais/excluir?id=<?= $a['id'] ?>" class="text-danger" onclick="return confirm('Excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>