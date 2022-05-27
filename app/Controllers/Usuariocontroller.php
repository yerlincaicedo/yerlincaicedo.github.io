<?php 
namespace app\Controllers;
use config\Main;
class UsuarioController
{ 

	public static  function registrar(){

$nombre=$_POST['nombre'];
$Apellidos=$_POST['Apellidos'];
$Email=$_POST['Email'];
$identificacion=$_POST['identificacion'];
$password=$_POST['password'];

       $respuesta="";
      $sql="INSERT INTO usuarios( nombres, apellidos, correo, identificacion, password) VALUES ('".$nombre."','".$Apellidos."','".$Email."','".$identificacion."','".$password."')";
      $Main=new main();
      $query= $Main->dbAbreDatabase($sql);
     if($query){
     $respuesta="operacion existosa"; 

     }else{

     $respuesta="fallo";      	
     }

    $json=array('respuesta'=>$respuesta);
    return $json;
        }


	public static  function logear(){
  $respuesta=0;
  $mail=$_POST['mail'];
  $password=$_POST['password'];

$sql="select *  from  usuarios where correo='".$mail."' and
password='".$password."'";

   $Main=new main();
  $query= $Main->dbAbreDatabase($sql);     

  $rows= $Main->numeroDeCampos($query);
  if ($rows!=0) {
   $respuesta=1;
  } 
  

    $json=array('respuesta'=>$respuesta);
    return $json;



        }

}
  




?>