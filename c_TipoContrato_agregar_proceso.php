<?php

 $nom=json_decode($_POST['chain']);
 $regimen=json_decode($_POST['chain2']);

// // echo "Nombre:".$nom;
// print_r($nom);
// echo $_GET['accion'];
switch($_GET['accion']){
	case 'agregar'://Insertar
		$insert="insert into c_TipoContrato (c_TipoContrato,Descripcion) values('$regimen','$nom')";
		mysqli_query($conn,$insert) or die(mysqli_error($conn));
	break;
	case 'editar'://editar
			$id=$_GET['id'];
		$update="UPDATE c_TipoContrato SET c_TipoContrato='$regimen',Descripcion='$nom' where id = '$id'";
		mysqli_query($conn,$update) or die(mysqli_error($conn));
	break;
	case 'eliminar'://eliminar
	$id=$_GET['id'];
		$eliminar="DELETE FROM c_TipoContrato where id ='$id'"; 
		mysqli_query($conn,$eliminar) or die(mysqli_error($conn));
	break;

}

echo "true";
?>