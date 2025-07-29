<!DOCTYPE html>
<html>
<head>
    <title>Editar Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Editar Post</h2>

    <form action="<?= site_url('posts/update/' . $post->id) ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Título</label>
            <input type="text" name="title" class="form-control" value="<?= esc($post->title) ?>" required>
        </div>

        <div class="form-group">
            <label>Imagem Atual</label><br>
            <?php if ($post->image): ?>
                <img src="<?= base_url('uploads/' . $post->image) ?>" alt="Imagem" style="max-width: 150px;">
            <?php else: ?>
                <p>Sem imagem</p>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label>Nova Imagem (se quiser alterar)</label>
            <input type="file" name="image" class="form-control-file">
        </div>

        <div class="form-group">
            <label>Conteúdo</label>
            <textarea name="content" class="form-control" rows="6" required><?= esc($post->content) ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="<?= site_url('posts') ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>
