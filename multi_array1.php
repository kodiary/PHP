<?php
$a[0]['Name']='Javed';
$a[0]['Class']='A';
$a[0]['Gender']='M';
$a[1]['Name']='Firoz';
$a[1]['Class']='B';
$a[1]['Gender']='M';
$a[2]['Name']='Saif';
$a[2]['Class']='C';
$a[2]['Gender']='M';
$a[3]['Name']='Anwar';
$a[3]['Class']='B';
$a[3]['Gender']='M';
//var_dump($a);

foreach($a as $v)
{
    echo $v['Name']." ";
    echo $v['Class']." ";
    echo $v['Gender']."<br/>";
}
?>