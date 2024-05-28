<?php
    include_once('../sources/listar1.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/style/styles.css">
</head>

<body class="d-flex justify-content-center align-items-center">
    <main class="col-6">
        <div class="row p-5 border rounded-2 blur">
            <h1 class="mb-4 d-flex justify-content-center">Edição</h1>

            <form method="POST" action="../sources/editar.php?usuario=<?php echo $_GET['usuario'];?>">
                <section>
                    <label class="mb-1">E-mail:</label>
                    <input type="text" name="email" class="form-control mb-3" value="<?php echo $usuario['email_usuario'];?>">
                </section>

                <section>
                    <label class="mb-1">Senha:</label>
                    <input type="password" name="senha" class="form-control mb-3" value="<?php echo $usuario['senha_usuario'];?>">
                </section>

                <section>
                    <input type="submit" class="btn btn-primary mb-3" value="Editar" style="width: 100px;">
                </section>
            </form>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>