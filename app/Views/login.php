<!DOCTYPE html>

<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <div class="container mt-5 py-3">
        <h3 class="mb-4">Login</h3>

        <?php if (session()->getFlashdata('erro')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('erro') ?></div>
        <?php endif; ?>

       <form action="<?= base_url('login') ?>" method="post">
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Senha:</label>
                <input type="password" name="senha" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Entrar</button>
            
        </form>
    </div>
</body>
</html>
