<?php
$link = mysqli_connect('localhost','root','','javed');
$q = mysqli_query($link,"select * from users");

$c = mysqli_num_rows($q);

if($c >0)
{
    ?>
    <h1>Users</h1>
    <?php
    if(isset($_GET['m']))
    {
        echo "<h2>".$_GET['m']." successfully</h2>";
    }
    ?>
    <a href="add_user.php">Add new user</a>
    <table>
    <tr><td>S.N</td><td>Name</td><td>Email</td><td>Gender</td><td>Action</td></tr>
    <?php
    while($row=mysqli_fetch_assoc($q))
    {?>
    
    <tr><td><?php echo $row['id'];?></td><td><?php echo $row['name'];?></td><td><?php echo $row['email'];?></td><td><?php echo $row['gender'];?></td><td><a href="edit_user.php?id=<?php echo $row['id'];?>">Edit</a></td><td><a href="delete_user.php?id=<?php echo $row['id'];?>">Delete</a></td></tr>
    
    <?php
   
    }
    ?>
    </table>
    <?php
}
else{
    echo "nothing found";
}

?>

