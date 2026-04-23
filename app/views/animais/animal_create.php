<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Animal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Cadastrar Novo Animal</h2>

    <?php if (isset($erro)): ?>
        <div class="alert alert-danger"><?= $erro ?></div>
    <?php endif; ?>

    <form action="<?= URL_BASE ?>/animais/salvar" method="POST" class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Nome do Animal</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Espécie</label>
            <input type="text" name="especie" class="form-control" placeholder="Ex: Cão, Gato" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Raça</label>
            <input type="text" name="raca" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">Sexo</label>
            <select name="sexo" class="form-select">
                <option value="Macho">Macho</option>
                <option value="Fêmea">Fêmea</option>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label">Idade</label>
            <input type="text" name="idade" class="form-control" placeholder="Ex: 2 anos">
        </div>
        <div class="col-md-4">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
                <option value="disponível">Disponível</option>
                <option value="em processo de adoção">Em processo de adoção</option>
                <option value="adotado">Adotado</option>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label">Castrado</label>
            <input type="checkbox" name="castrado" value="1" class="form-check-input">
        </div>
        <div class="col-12">
            <label class="form-label">Histórico de Saúde / Castração</label>
            <textarea name="historico_saude" class="form-control" rows="3"></textarea>
        </div>
        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-success">Salvar Animal</button>
            <a href="<?= URL_BASE ?>/animais" class="btn btn-light">Cancelar</a>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>