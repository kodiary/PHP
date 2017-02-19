<h1>My First JavaScript</h1>

<button type="button" onclick="document.getElementById('demo').innerHTML=Date()" >
Click me to display Date and Time</button>

<p id="demo"></p>

<hr />

<h1>This Is My Second JavaScript</h1>
<button type="button" onclick="Myfunction()">Click Me!</button>

<p id="demo1">This is just a Demonstration</p>


<script>
function Myfunction()

{
    
    document.getElementById('demo1').innerHTML="Hello Java Script";
    document.getElementById("demo1").style.fontSize="25px";
    document.getElementById("demo1").style.color="green";
}

</script>