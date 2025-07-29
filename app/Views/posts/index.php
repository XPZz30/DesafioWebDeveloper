<!DOCTYPE html>
<html>
<head>
    <title>Lista de Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">

    <h2>Posts</h2>
    <a href="<?= site_url('posts/create') ?>" class="btn btn-primary mb-3">Novo Post</a>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <table class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Usuário</th>
                <th>Imagem</th>
                <th>Criado em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $post->id ?></td>
                <td><?= esc($post->title) ?></td>
                <td><?= esc($post->user->username ?? 'Desconhecido') ?></td>
                <td>
                    <?php if ($post->image): ?>
                        <img src="<?= base_url('writable/uploads/' . $post->image) ?>" alt="Imagem" style="max-width: 100px;">
                    <?php endif; ?>
                </td>
                <td><?= date('d/m/Y H:i', strtotime($post->created_at)) ?></td>
                <td>
                    <a href="<?= site_url('posts/edit/' . $post->id) ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="<?= site_url('posts/delete/' . $post->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Confirma a exclusão?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= site_url('blog') ?>"><button class="btn btn-primary">Ir para Blog</button></a>
</div>
</body>
</html>
