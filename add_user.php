<?php
include('common/inc.php');
if(isset($_POST['nm']))
{
    $n=$_POST['nm'];
    $e=$_POST['em'];
    $g=$_POST['gn'];
    $q= "insert into users values('','".$n."','".$e."','".$g."')"; 
    mysqli_query($link,$q);
    redirect("select.php?m=inserted");
    
}

?>

<form method="post" action=" ">
Name :<input type="text" name="nm" />
<br /><br />
Email :<input type="text" name="em" />
<br /><br />
Gender :
<input type="radio" value="male" name="gn" />Male
<input type="radio" value="female" name="gn" checked="" />Female
<br /><br />

<input type="submit" value="submit"/>
</form>