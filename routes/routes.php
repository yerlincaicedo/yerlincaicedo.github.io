<?php
//define ('ROOT',dirname(__FILE__));
//cabezeras  encaso de acceder de manera externa*/
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');
use app\Controllers\UsuarioController;


$route->get('/',function(){

//echo $_SERVER['REQUEST_URI'] ; 
  //echo "ok";
  header( 'Location:'.$_SERVER['REQUEST_URI']."inicio.php"); 
  //echo $_SERVER['DOCUMENT_ROOT'];
  //include_once $_SERVER['DOCUMENT_ROOT']."/yerlincaicedo.github.io/inicio.php";

 });

 
$route->post('/registrar',function(){
  $UsuarioController=new UsuarioController();
  echo json_encode($UsuarioController->registrar());

 });

$route->post('/logear',function(){

$UsuarioController=new UsuarioController();
echo json_encode($UsuarioController->logear());



});


?>