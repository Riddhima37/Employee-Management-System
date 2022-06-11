<?php
include("db.php");
include("att.php");
?>
<div class="panel panel-default">
<div class="panel panel-heading">
<h2>
<a class="btn btn-sucess" href="add.php">Add Emp</a>
<a class="btn btn-info pull-right" href="Viewall.php">View all</a>
</h2>
<div class="panel panel-body">
<form action="index2.php">
<table class="table table-striped"></table>
<th>Serial Number</th>
<th>Name</th>
<th>id</th>
<th>Attendance Status</th>
<?php $con=mysqli_query($con,"select * from attendance"); 
$serialnumber=0
while($row=mysqli_fetch_array($result))
{
?>
<td></td>
</form>
</div></div>