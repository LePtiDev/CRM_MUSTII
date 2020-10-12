<?php
require_once('config.php');
/* exemple de requette

require_once('app/stuper/database.php');

$test = new database();
$test->connect();
$response = $test->bdd->query('SELECT name FROM users')->fetch();

echo $response['name'];

*/

try{
    if(isset($_GET['action'])){
        switch ($_GET['action']) {
            case 'dashboard':
                echo "vous etes sur le dashboard";
                break;
            case 'user':
                echo "vous etes sur le user";
                break;
            case 'login':
                echo "vous etes sur le login";
                break;
            default:
                require_once ('./app/views/error.php');
        }
    }
    else{
        echo "vous etes sur le dashboard";
    }
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}