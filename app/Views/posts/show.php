<!DOCTYPE html>
<html>

<head>
    <title><?= esc($post->title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
    <div class="container mt-5">
        <div class="card mb-4 text-dark">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="font-weight-bold"><?= esc($post->user->username ?? 'Desconhecido') ?></span>
                <span class="text-muted"><?= date('d/m/Y H:i', strtotime($post->created_at)) ?></span>
            </div>

            <?php if ($post->image): ?>
                <img src="<?= base_url('uploads/' . $post->image) ?>" class="card-img-top" alt="Imagem do post">
            <?php endif; ?>

            <div class="card-body">
                <p class="card-text"><?= esc($post->content) ?></p>
            </div>
        </div>

        <a href="<?= site_url('/posts') ?>" class="btn btn-secondary mt-4">Voltar para a lista</a>
        <a href="<?= site_url('blog') ?>" class="btn btn-primary mt-4">Voltar para o Blog</a>
    </div>
</body>

</html>
