<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema 01 - Suma de Números</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container" style="max-width: 500px;">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Problema 01 - Suma</h5>
            </div>
            <div class="card-body">
                <?php
                $n1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
                $n2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;
                $suma = $n1 + $n2;
                ?>
                <form method="POST" action="">
                    <div class="mb-3 row">
                        <label for="num1" class="col-sm-4 col-form-label">Número 1</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="num1" name="num1" value="<?= $n1 ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="num2" class="col-sm-4 col-form-label">Número 2</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="num2" name="num2" value="<?= $n2 ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="suma" class="col-sm-4 col-form-label">Suma</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="suma" value="<?= $suma ?>" readonly>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>