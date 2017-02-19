<?php
function redirect($path)
{
    echo "<script>window.location='".$path."'</script>";
} 

$link = mysqli_connect('localhost','root','','javed');
?>