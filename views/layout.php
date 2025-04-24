<!DOCTYPE html>
<html>
<head>
    <title>Sistema Simples</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 600px; margin: 0 auto; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        .btn { padding: 5px 10px; text-decoration: none; color: white; background-color: #007bff; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerenciador de Usuários</h1>
        <a href="index.php?action=create" class="btn">Adicionar Usuário</a>
        <hr>
        <?php echo $content; ?>
    </div>
</body>
</html>