
<?php
$f = $_POST['f'];
$s = $_POST['s'];
$o = $_POST['operation'];
if($o=='add')
{
    echo "Sum is ".($f+$s);
}
if($o=='sub')
{
    echo "Difference is ".($f-$s);
}
if($o=='mul')
{
    echo "Multiplication is ".($f*$s);
}
if($o=='div')
{
    echo "Division is ".($f/$s);
}
?>
<hr />
<a href="form.php">Back</a>