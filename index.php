<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Control environment web application -->
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta value="no-cache, no-store, must-revalidate" name="no-chache">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
          crossorigin="anonymous">

    <!-- llamado de jquery para la programación de rutinas CRUD-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Demostración de php con js</title>
</head>
<body class="container">
    <header>
        <h1>Demostración de php con js</h1>
        <hr>
    </header>
    <main>
        <div class="row">
            <div class="col-md-6">
                <h2>Formulario de prueba</h2>

                    <div class="mb-3">
                        <label for="txtCedula" class="form-label">Cédula</label>
                        <input type="text" class="form-control" id="txtCedula" name="txtCedula" >
                    </div>

                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre">
                    </div>

                    <div class="mb-3">
                        <button type="button" class="btn btn-primary" id="btnInsertar">Insertar</button>
                        <button type="button" class="btn btn-success" id="btnActualizar">Actualizar</button>
                        <button type="button" class="btn btn-danger"  id="btnEliminar">Eliminar</button>
                    </div>


            </div>
        </div>
    </main>
    <footer>
        <hr>
        <p class="text-center">Todos los derechos reservados &copy; 2023</p>
    </footer>

    <script defer src="js/instrucciones.js"></script>


</body>
</html>
