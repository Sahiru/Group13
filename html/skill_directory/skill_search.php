<?php include("../includes/new_main_header.php");?>

<div style="background-color:lightcyan; color:black; padding:15px; ">

<h1 style="text-align:center;">student name</h1>
<img src="linux.jpg"  style="width:100px;height:100px;">


</div>
<div style="background-color:black; padding:5px; ">
	<button type="button"><font color="blue">Profile</font></button>
	<button type="button"><font color="blue">Vacancy</font></button>
	<button type="button" style="background-color:blue;"><font color="white">Search</font></button>
	<button type="button"><font color="blue">Logout</font></button>
</div>

<style>
.button {
    background-color:#000000;
    text-align: center;
	padding: 5px 5px;
	color: white;
	cursor: pointer;
	margin: 10px 12px;
}.static {
    position: static;
    border: 1px solid #87CEEB;
	padding-left:10px;
	margin-top: 50px;
    margin-bottom: 100px;
    margin-right: 50px;
    margin-left: 50px;
  
} .form {
    
    margin: 10px 25% auto 25%;
}
</style>

<!-- content area -->
<div class="static">
<div class="form">
<p style="font-size:150%">Search for Vacancies!</p>
<form>
	<table>
		<tr><td> Vacancy:</td><td> <input type="text" name="vacancysearch"></td></tr>
		<tr><td> Company:</td><td> <input type="text" name="companysearch"></td></tr>
	</table>
<input type="submit" value="Search" name="search_vacancy">
</form>

</div>
<div style="background-color:lightcyan; color:black; padding:200px; ">

</div>

</div>

</body>
</html>