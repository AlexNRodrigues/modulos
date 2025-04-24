<?php
ob_start();
?>
<h2>Usuários</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['nome']; ?></td>
            <td><?php echo $user['email']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php
$content = ob_get_clean();
require __DIR__ . '/layout.php';
