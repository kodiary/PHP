<?php
include('common/inc.php');
$id=$_GET['id'];
$q="delete from users where id = '".$id."'";
mysqli_query($link,$q);
redirect("select.php?m=deleted");


?>