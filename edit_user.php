<?php
include('common/inc.php');
$id=$_GET['id'];
$q="select * from users where id = '".$id."'";
$query = mysqli_query($link,$q);
if(mysqli_num_rows($query) > 0)
{
    $row = mysqli_fetch_assoc($query);
}
if(isset($_POST['nm']))
{
    
    $n=$_POST['nm'];
    $e=$_POST['em'];
    $g=$_POST['gn'];
    $q="update users set name='".$n."', email='".$e."', gender='".$g."' where id='".$id."'";
    mysqli_query($link,$q);
    redirect("select.php?m=updated");
}

?>





<form method="post" action=" ">
Name :<input type="text" name="nm" value="<?php echo $row['name']?>" />
<br /><br />
Email :<input type="text" name="em" value="<?php echo $row['email']?>" />
<br /><br />
Gender :

   <input type="radio" value="male" name="gn" <?php if($row['gender'] == 'male'){?>checked=" "<?php }?> />Male
    <input type="radio" value="female" name="gn" <?php if($row['gender'] == 'female'){?>checked=" "<?php }?> />Female  




<br /><br />

<input type="submit" value="submit"/>
</form>