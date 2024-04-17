<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background: #f8f9fa;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Registro</h2>
                        <form id="registerForm" action="../controladores/registerBdd.php" method="post">
                            <div class="form-group">
                                <label for="name">Nombre de usuario</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" class="form-control" id="contrasenia" name="contrasenia"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirmar Contraseña:</label>
                                <input type="password" class="form-control" id="confirm_password"
                                    name="confirm_password" required>
                                <small id="passwordHelpBlock" class="form-text text-danger"></small>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                        <hr>
                        <p class="text-center">Ya tienes una cuenta? <a href="/pagina/index.php">Iniciar Sesión</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#confirm_password').on('keyup', function() {
            var password = $('#contrasenia').val();
            var confirmPassword = $(this).val();
            if (password != confirmPassword) {
                $('#passwordHelpBlock').text('Las contraseñas no coinciden');
            } else {
                $('#passwordHelpBlock').text('');
            }
        });
    });
    </script>
</body>

</html>