<?php
require_once __DIR__ . '/controllers/usuario.php';
require_once __DIR__ . '/helpers/util.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'list';

switch ($action) {
    case 'create':
        show_create_form();
        break;
    case 'save':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nome' => sanitize($_POST['nome']),
                'email' => sanitize($_POST['email'])
            ];
            save_user($data);
        }
        break;
    default:
        list_users();
        break;
}
