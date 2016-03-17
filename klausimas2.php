<?
$_POST['toliau']='';
echo 'Jūsų gimimo data:<br><br>';
echo '<select name= "metai" required  onChange = submit()>';
for ($n = date(Y); $n >=1900 ; $n--){
echo '<option value="'.$n.'"'; if ($_POST['metai']==$n){echo ' Selected ';} echo  '>'.$n.'</option>';
}
echo '</select>';

echo '<select name= "menuo" required  onChange = submit()>';
for ($n = 1; $n <= 12; $n++){
echo '<option value="'.$n.'"'; if ($_POST['menuo']==$n){echo ' Selected ';} echo  '>'.$n.'</option>';
}
echo '</select>';

if ($_POST['menuo']!=''){
$d=cal_days_in_month(CAL_GREGORIAN,$_POST['menuo'],$_POST['metai']);
}
echo '<select name= "diena" required onChange = submit()>';
for ($n = 1; $n <= $d; $n++){
echo '<option value="'.$n.'"'; if ($_POST['diena']==$n){echo ' Selected ';} echo  '>'.$n.'</option>';
}
echo '</select><br>';




?>