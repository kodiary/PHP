<title>Basic Calculator</title>
<body>
<style>
#calc
{
height: auto;
width: 300px;
background-color:gray;  
border: 1px solid black; 
    
}
</style>

<div id="calc">
<form action="form_operation.php" method="post">
<table>
<tr></tr>
<tr></tr>
<tr>
<td>First :</td>
<td><input type="text" name="f" /></td>
</tr>
<tr>
<td>Second :</td>
<td><input type="text" name="s" /></td>
</tr>
<tr>
<td>Add <input type="radio" name="operation" value="add" /></td>
<td>Sub <input type="radio" name="operation" value="sub" /></td>
</tr>
<tr>
<td>Mul <input type="radio" name="operation" value="mul" /></td>
<td>Div <input type="radio" name="operation" value="div" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Submit" /></li></td>
</tr> 

</table>
</form>
</div>
</body>