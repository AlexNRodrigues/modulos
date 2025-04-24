<?php

$usersFile = __DIR__ . '/users.json';

function get_all_users()
{
    global $usersFile;

    if (!file_exists($usersFile)) {
        return [];
    }

    $jsonData = file_get_contents($usersFile);
    return json_decode($jsonData, true) ?: [];
}

function create_user($nome, $email)
{
    global $usersFile;

    $users = get_all_users();
    $newUser = [
        'id' => rand(3, 100),
        'nome' => $nome,
        'email' => $email
    ];

    $users[] = $newUser;

    file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT));
    return $newUser;
}
