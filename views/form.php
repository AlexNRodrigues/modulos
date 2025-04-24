<?php
ob_start();
?>
<h2>Novo Usuário</h2>
<form method="post" action="index.php?action=save">
    <div>
        <label>Nome:</label>
        <input type="text" name="nome" required>
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <input type="submit" value="Salvar" class="btn">
    </div>
</form>
<?php
$content = ob_get_clean();
require __DIR__ . '/layout.php';
