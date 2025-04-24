<?php
require_once __DIR__ . '/../models/usuario.php';

function list_users()
{
    $users = get_all_users();
    require __DIR__ . '/../views/list.php';
}

function show_create_form()
{
    require __DIR__ . '/../views/form.php';
}

function save_user($data)
{
    create_user($data['nome'], $data['email']);
    header('Location: index.php');
}
