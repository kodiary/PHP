<?php
$a=array(2);
for($i=3; $i<=100; $i++)
{
    $check=0;
    for($j=0; $j<count($a); $j++)
    {
        if($i%$a[$j]==0)
        {
            $check=1;
            break;
        }
    }
    if($check==0)
    {
        $a[]=$i;
    }
    
}
for($i=0;$i<count($a);$i++)
{
    echo $a[$i]."<br/>";
}
//var_dump($a);
?>
<hr />
<a href="File_list.php">Back</a>