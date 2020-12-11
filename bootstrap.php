<?php 

use Doctrine\ORM\Tools\Setup; 
use Doctrine\ORM\EntityManager; 

date_default_timezone_set('America/Lima'); 

require_once "vendor/autoload.php"; 
$isDevMode = true; 

$config = Setup::createYAMLMetadataConfiguration(array(__DIR__ . "/config"), $isDevMode); 

$conn = array( 
    'host' => 'localhost',
    'driver' => 'pdo_mysql', 
    'user' => 'root', 
    'password' => '', 
    'dbname' => 'anglular_web_app', 
    'port' => '3001' ,
); 


$entityManager = EntityManager::create($conn, $config);