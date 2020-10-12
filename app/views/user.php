<?php
require_once(__DIR__ . '/../stuper/database.php');

$get_users = new database();
$users = $get_users->bdd->query('SELECT name FROM users');
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once(__DIR__ . '/partials/header.php') ?>
    <title>Utilisateur</title>
</head>
<body>
    <div class="container-fluid pt-3">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="text-center">Page user</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-end pr-5 mb-5">
                <button class="btn btn-success">Ajouter un utilisateur</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Travail</th>
                        <th scope="col">État</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    var_dump($users->fetch());
                        foreach($users as $user)
                        {

                            ?>
                            <th scope="row"><?php $user['id'] ?></th>
                            <td><?php $user['name'] ?></td>
                            <td><?php $user['last_name'] ?></td>
                            <td><?php $user['email'] ?></td>
                            <td><?php $user['role'] ?></td>
                            <td><?php $user['job'] ?></td>
                            <td><?php $user['online'] ?></td>
                            <?php
                        }
                    ?>
                    <tr>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php require_once(__DIR__ . '/partials/footer.php') ?>
</body>
</html>
