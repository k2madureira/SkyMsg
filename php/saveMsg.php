<?php
session_start();


$type = $_POST['type'];


if($type == 'add'){

	$msg = $_POST['msg'];

		if(empty($_SESSION['msgs'])){

			$_SESSION['msgs'] = array();
			array_push($_SESSION['msgs'],$msg); 
			
			 
		}else{

			
			array_push($_SESSION['msgs'],$msg);	
			
		}

}else{

	limpaSession();
}


function limpaSession(){

	$_SESSION['msgs'] = '';
}