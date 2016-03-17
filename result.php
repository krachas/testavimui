
<?php
session_start(); 
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="lt-LT">

<head profile="http://gmpg.org/xfn/11">
<title>Testas</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


</head>
<pre>
<?
// 
if ( ($_SESSION['domejimasis']=='ne' ) or ($_SESSION['nemoku'])) {echo 'Ačių, kad užpildėte anketą';}
else {




echo 'Ačių, kad užpildėte anketą';echo '<br>';echo '<br>';

echo 'Vardas: '.$_SESSION['vardas']; echo '<br>';

echo 'Gimimo data: '.$_SESSION['metai'].'-'.$_SESSION['menuo'].'-'.$_SESSION['diena']; echo '<br>';
echo 'Lytis: '.$_SESSION['lytis']; echo '<br>';
echo 'Domitės programavimu: '.$_SESSION['domejimasis']; echo '<br>';
echo 'Programavimo kalbos: ';
for ($i=0; $i<(Count($_SESSION['P'])-1);$i++){
	if ($_SESSION['P'][$i]!=''){
	echo $_SESSION['P'][$i].', ';
	}
}
echo $_SESSION['P'][$i];
}

$_SESSION['klausimas']=1;
?>