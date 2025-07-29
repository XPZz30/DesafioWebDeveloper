<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h2 class="mb-4">Blog</h2>

        <form method="get" class="form-inline mb-4 ">
            <input type="text" name="q" value="<?= esc($termo) ?>" class="form-control mr-2" placeholder="Buscar posts...">
            <button type="submit" class="btn btn-primary">Buscar</button>
            <div class="ml-auto">
                <a href="<?= site_url('posts/create') ?>" class="btn btn-success">Criar Novo Post</a>
            <a href="<?= site_url('/posts') ?>" class="btn btn-secondary">Voltar para a lista</a>
            </div>
        </form>

        <?php if ($posts->isEmpty()): ?>
            <div class="alert alert-warning">Nenhum post encontrado.</div>
        <?php endif; ?>

        <?php foreach ($posts as $post): ?>
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="font-weight-bold"><?= esc($post->user->username ?? 'Desconhecido') ?></span>
                    <span class="text-muted"><?= date('d/m/Y H:i', strtotime($post->created_at)) ?></span>
                </div>

                <?php if ($post->image): ?>
                    <img src="<?= base_url('uploads/' . $post->image) ?>" class="card-img-top" alt="Imagem do post">
                <?php endif; ?>

                <div class="card-body">
                    <h5 class="card-title"><?= esc($post->title) ?></h5>
                    <p class="card-text"><?= word_limiter(strip_tags($post->content), 20) ?></p>
                    <a href="<?= site_url('posts/' . $post->id) ?>" class="btn btn-sm btn-outline-primary">Ver mais</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>