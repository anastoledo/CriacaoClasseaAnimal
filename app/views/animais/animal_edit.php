<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Animal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Editar Dados do Animal</h2>

    <form action="<?= URL_BASE ?>/animais/atualizar" method="POST" class="row g-3">
        <input type="hidden" name="id" value="<?= $animal['id'] ?>">

        <div class="col-md-6">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="<?= $animal['nome'] ?>" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Espécie</label>
            <input type="text" name="especie" class="form-control" value="<?= $animal['especie'] ?>" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Raça</label>
            <input type="text" name="raca" class="form-control" value="<?= $animal['raca'] ?>">
        </div>
        <div class="col-md-4">
            <label class="form-label">Sexo</label>
            <select name="sexo" class="form-select">
                <option value="Macho" <?= $animal['sexo'] == 'Macho' ? 'selected' : '' ?>>Macho</option>
                <option value="Fêmea" <?= $animal['sexo'] == 'Fêmea' ? 'selected' : '' ?>>Fêmea</option>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label">Idade</label>
            <input type="text" name="idade" class="form-control" value="<?= $animal['idade'] ?>">
        </div>
        <div class="col-md-4">
            <label class="form-label">Porte</label>
            <select name="porte" class="form-select">
                <option value="Pequeno" <?= $animal['porte'] == 'Pequeno' ? 'selected' : '' ?>>Pequeno</option>
                <option value="Médio" <?= $animal['porte'] == 'Médio' ? 'selected' : '' ?>>Médio</option>
                <option value="Grande" <?= $animal['porte'] == 'Grande' ? 'selected' : '' ?>>Grande</option>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label">Status de Adoção</label>
            <select name="status" class="form-select">
                <option value="disponível" <?= $animal['status'] == 'disponível' ? 'selected' : '' ?>>Disponível</option>
                <option value="em processo de adoção" <?= $animal['status'] == 'em processo de adoção' ? 'selected' : '' ?>>Em processo</option>
                <option value="adotado" <?= $animal['status'] == 'adotado' ? 'selected' : '' ?>>Adotado</option>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label">Castrado</label>
            <input type="checkbox" name="castrado" value="1" <?= $animal['castrado'] ? 'checked' : '' ?> class="form-check-input">
        </div>
        <div class="col-12">
            <label class="form-label">Histórico de Saúde</label>
            <textarea name="historico_saude" class="form-control" rows="3"><?= $animal['historico_saude'] ?></textarea>
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Atualizar Informações</button>
            <a href="<?= URL_BASE ?>/animais" class="btn btn-light">Voltar</a>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>