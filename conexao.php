<?PHP


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With'); 
header('Content-Type: application/json; charset=utf-8');   



date_default_timezone_set('America/Sao_Paulo');

//CONEXAO LOCAL

// define('BD', 'apiangular');
// define('USER', 'root');
// define('SENHA', '');
// define('HOST', 'localhost');

//CONEXAO LOCAL MYSQL

define('BD', 'riooffsite');
define('USER', 'root');
define('SENHA', 'asd@938');
define('HOST', '127.0.0.1');



$mysqli = new mysqli(HOST, USER, SENHA, BD);


?>