<?php

$var1="bonjour";
$var2="bonjour";

if ($test=strcmp($var1,$var2)==0)
{
    echo "c'est bon</br></br></br>";
}
else
{
    echo "ce n'est pas bon</br></br></br>";
}
//echo $test;

if (strcmp($var1,$var2)==0){

 
    echo " ces mots sont les memes</br></br>";
}

else{
    echo " les mots sont differents";
    
}

//var_dump($test);
//var_export($test);

$tab= array("13"=>"jesse","elie","laura","raissa");

foreach ($tab as $key => $value) {
   echo "   $key : $value</br>";
}

?>


<form>
</br>
<option> <?php 
$tab= array("13"=>"jesse","elie","laura","raissa");

foreach ($tab as $key => $value) {
   echo "   $key : $value</br>";
}
?>
</option>








 </form>
 