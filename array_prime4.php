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
//var_dump($a);
foreach($a as $k=>$v)
{
    echo $k." ".$v."<br/>";
}
?>