
<table>

<?php
for($i=1;$i<=16;$i++)
{
    
    if(($i+3)%4==0)
    {
        echo "<tr><td>".($i+$i)."</td>";
    }
    if(($i+2)%4==0)
    {
        
       echo "<td>".($i+$i)."</td>"; 
    }
    if(($i+1)%4==0)
    {
        echo "<td>".($i+$i)."</td>";
        
    }
    if($i%4==0)
    {
        echo "<td>".($i+$i)."</td></tr>";
        
    }
    
}


?>
</table>