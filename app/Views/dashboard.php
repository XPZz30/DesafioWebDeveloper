<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <?php $usuario = session()->get('usuario_logado'); ?>
        <h3>Bem-vindo, <?= isset($usuario['nome']) ? esc($usuario['nome']) : 'Usuário' ?>!</h3>
        <p>Você está logado no painel de controle.</p>
        <a href="<?= site_url('/posts') ?>" class="btn btn-secondary mt-4">Ir para a lista</a>
        <a href="<?= site_url('blog') ?>" class="btn btn-primary mt-4">Ir para o Blog</a>
        <a href="<?= site_url('logout') ?>" class="btn btn-danger mt-4">Sair</a>

    </div>
</body>

</html>