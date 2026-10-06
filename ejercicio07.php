<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 07 - Cociente y Residuo</title>
    <link rel="stylesheet" href="plantilla/css/bootstrap.min.css">
    <style>
        .card { animation: slideUp 0.5s ease-out; transition: 0.3s; }
        .card:hover { transform: translateY(-4px); }
        .res { animation: pop 0.3s ease-out; }
        @keyframes slideUp { from { opacity: 0; transform: translateY(15px); } }
        @keyframes pop { from { transform: scale(0.8); } }
    </style>
</head>
<body class="bg-light p-4 d-flex justify-content-center">
    <div class="card shadow border-0 p-4 rounded-4" style="max-width: 400px; width: 100%;">
        <h4 class="text-success text-center fw-bold mb-3">Cociente y Residuo</h4>
        
        <?php
        $n1 = $_POST['n1'] ?? '';
        $n2 = $_POST['n2'] ?? '';
        ?>

        <form method="POST">
            <input type="number" name="n1" class="form-control mb-2" placeholder="Número 1" value="<?= $n1 ?>" required>
            <input type="number" name="n2" class="form-control mb-3" placeholder="Número 2" value="<?= $n2 ?>" required>
            <button class="btn btn-success w-100 fw-bold">Calcular</button>
        </form>

        <?php if ($n1 !== '' && $n2 !== ''): ?>
            <?php if ($n2 == 0): ?>
                <div class="alert alert-danger mt-3 mb-0 text-center res">No se puede dividir entre 0</div>
            <?php else: ?>
                <div class="alert alert-success mt-3 mb-0 text-center res">
                    <b>Cociente:</b> <?= intdiv($n1, $n2) ?> <br>
                    <b>Residuo:</b> <?= $n1 % $n2 ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <a href="index.html" class="text-center text-muted small mt-3">← Volver</a>
    </div>
</body>
</html>