
<?php
session_start(); 
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="lt-LT">

<head profile="http://gmpg.org/xfn/11">
<title>Testas</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>
<?

//
if ($_SESSION['klausimas']=='') {$_SESSION['klausimas']=$_COOKIE['klausimas'];}
if ($_SESSION['klausimas']=='') {$_SESSION['klausimas']=1;}

if (isset($_POST['reset'])){ 
	$_SESSION['klausimas']=1;
	session_destroy();
}// 

if (isset($_POST['toliau'])){ ;
	
	if (($_POST['nemoku'])) {header('Location: result.php');}
	
	unset($_POST['toliau']);
//	print_r($_POST);
		echo '<br>';
	for ($i = 0; $i < count(array_keys($_POST)) ; $i++){
		$_SESSION[array_keys($_POST)[$i]]=$_POST[array_keys($_POST)[$i]];
	}

	$_sessionp['atsak_'.$_SESSION['klausimas']]=$_POST['atsakymas'.$_SESSION['klausimas']];
	$_SESSION['klausimas']++;
	setcookie('klausimas', $_SESSION['klausimas'], time() + (86400 * 30), "/"); // 86400 = 1 day
}// 

//Print_r($_SESSION);
?>


<form id="manoforma" method="post" enctype="multipart/form-data" action="index.php">
<?
if (($_SESSION['klausimas']<=6 and ( $_POST['domejimasis']!='ne') ) ){
	
	include('klausimas'.$_SESSION['klausimas'].'.php');
	
	
}else  {header('Location: result.php');}
/*
*/

?>
<br>
<input type="submit" name= "toliau" value="Tooliau" >
