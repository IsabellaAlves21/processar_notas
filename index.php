<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas dos Alunos</title>
</head>
<body>
    <h1>Cadastro de Notas</h1>
    <form action="processa_notas.php" method="post">
        <label for="nota1">Nota 1:</label>
        <input type="number" step="0.01" name="nota1" id="nota1" required><br><br>
        
        <label for="nota2">Nota 2:</label>
        <input type="number" step="0.01" name="nota2" id="nota2" required><br><br>
        
        <label for="nota3">Nota 3:</label>
        <input type="number" step="0.01" name="nota3" id="nota3" required><br><br>
        
        <label for="nota4">Nota 4:</label>
        <input type="number" step="0.01" name="nota4" id="nota4" required><br><br>
        
        <input type="submit" value="Calcular Média">
    </form>
</body>
</html>
