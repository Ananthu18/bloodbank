
<head>
<title>Search</title>
<script type= "text/javascript">
function fun(x)
	{
	 document.getElementById('sha').style.backgroundColor=x;
	}
function fun1(x)
    {
     document.getElementById('12').style.backgroundColor=x;
    }
	function alrt()
	{
	   alert("Table will be displayed");
	}
</script>
<style>
    
    label{
	    font-family:"Comic Sans MS", cursive, sans-serif
	 }
    select,input[type=text] {
        width: 150px;
		height:30px;
        margin: 10px;
		background-color:#FFF685;
		border-radius:8px;
		border:none;
    }
    select:focus {
        min-width: 150px;
        width: auto;
    }  
	input[type=text]{
	    width: 150px;
		height:30px;
        margin-left:70px;
		background-color:#FFF685;
		border-radius:8px;
		border:none;
	}
	.btn{
	background-color:yellow;
    font-size:15px;
    color:black;
    border:none;
    padding:10px;
    border-radius:8px;
    font-family:Arial, sans-serif;
    margin-left:10%;
}
#container
{
margin-left:400px;
margin-right:300px;
margin-top:100px;
margin-bottom:200px;
background-color:orange;
border-radius:8px;
}
</style>
</head>
<body bgcolor="cyan">
<center>
<h1>Search</h1>
<div id="container">
<form id="b" action="search_1.php" method="POST">
<label>Select the Blood Group</label>
<select onmouseover="fun1('red')" onmouseout="fun1('#FFF685')" id="12" name="bb">
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
</select>
<button class="btn">Search</button>
</form>
<form id="b2" action="search_2.php" method="POST">
<label>Search By City</label>
<input type="text" placeholder="City" id="cty" name="cty" onmouseover="fun('red')" id="sha" onmouseout="fun('#FFF685')">
<button class="btn">Search</button> 
</form>
</div>
</body>