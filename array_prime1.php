<?php
$a=array(2);


for($i=3; $i<=100; $i++)
{
    $check =0;
    
    for($j = 0;$j<count($a);$j++)
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
foreach($a as $v)
{
    echo $v."<br/>";
    
}
//print_r($a);
//var_dump($a);

?>
<hr />
<a href="File_list.php">Back</a>