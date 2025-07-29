<!DOCTYPE html>
<html>
<head>
    <title>Criar Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Novo Post</h2>

    <form action="<?= site_url('posts/store') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Título</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Imagem</label>
            <input type="file" name="image" class="form-control-file">
        </div>

        <div class="form-group">
            <label>Conteúdo</label>
            <textarea name="content" class="form-control" rows="6" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="<?= site_url('posts') ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>