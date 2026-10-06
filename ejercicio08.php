<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema 09 - Área de un Círculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container" style="max-width: 500px;">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h5 class="card-title mb-0">Problema 09 - Área de Círculo</h5>
            </div>
            <div class="card-body">
                <?php
                define("PI", 3.14159); // Definición de la constante PI como solicita la ficha
                
                $radio = isset($_POST['radio']) ? (float)$_POST['radio'] : 0;
                $area = PI * pow($radio, 2);
                ?>
                <form method="POST" action="">
                    <div class="mb-3 row">
                        <label for="radio" class="col-sm-4 col-form-label">Radio</label>
                        <div class="col-sm-8">
                            <input type="number" step="any" class="form-control" id="radio" name="radio" value="<?= $radio ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="area" class="col-sm-4 col-form-label">Área</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="area" value="<?= $radio > 0 ? number_format($area, 5) : 0 ?>" readonly>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>