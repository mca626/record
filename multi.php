<html>
<body>
input the number : <input type="text" id="num">
<br><br>
enter the limit : <input type="text" id="limit">
<br><br>
<button onClick = "table()">GO</button>
<p id = "disp"></p>

<script>
function table()
{
var num = document.getElementById("num").value;
var limit = document.getElementById("limit").value;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange=function(){
if(this.readyState==4 && this.status==200)
{
document.getElementById("disp").innerHTML = this.responseText;
}
};
xhttp.open("GET", "table.php?num="+num+"&limit="+limit, true);
xhttp.send();
}
</script>
</body>
</html>