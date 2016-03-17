<?
echo 'Kokias programavimo kalbas mokate?<br><br>';
echo '<input type="checkbox" name="P[]" value="PHP"'; if ($_POST['nemoku']){echo ' disabled ';} echo  '>PHP<br> ';
echo '<input type="checkbox" name="P[]" value="CSS"'; if ($_POST['nemoku']){echo ' disabled ';} echo  ' >CSS<br>';
echo '<input type="checkbox" name="P[]" value="HTML"'; if ($_POST['nemoku']){echo ' disabled ';} echo  ' >HTML<br>';
echo '<input type="checkbox" name="P[]" value="JavaScript"'; if ($_POST['nemoku']){echo ' disabled ';} echo  ' >JavaScript<br>';
echo '<input type="checkbox" name="P[]" value="Java"'; if ($_POST['nemoku']){echo ' disabled ';} echo  ' >Java<br>';
echo '<input type="checkbox" name="nemoku" value="jokios"  '; if ($_POST['nemoku']){echo ' checked ';} echo  ' onChange = submit() >Nemoku nė vienos<br>';



?>