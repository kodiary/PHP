<table>

<?php
for($i=1;$i<=9;$i++)
{
  
    if(($i+2)%3==0)
    {
        echo "<tr><td>".($i+$i-1)."</td>";
        
        
    }
    if(($i+1)%3==0)
    {
        echo "<td>".($i+$i-1)."</td>";
        
    }
     if($i%3==0)
    {
        echo "<td>".($i+$i-1)."</td></tr>";
        
    
    
    }
    
    
}


?>


</table>