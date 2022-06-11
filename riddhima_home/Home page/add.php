<?php
include("att.php");
include("db.php");
$flag=0;
if(isset($_POST['submit']))
{
   
    $result = "INSERT INTO `attendance` (Emp name,id) VALUES ('".$_POST["name"]."','".$_POST["id"]."')";
    if($result)
    {
        $flag=1;
    }
}
?>
<div class="panel panel-default">
    <?php if($flag) { ?>
    <div class="alert alert-sucess">
        <strong>!Sucess</strong> Data sucessfully inserted;
    </div>
    <?php } ?>
    <div class="panel-heading">
        <h2>
            <a class="btn btn-sucess" href="add.php"> Add Emp</a>
            <a class="btn btn-info pull-right" href="adminDash.html"> Back</a>
</h2>
</div>
<div class="panel-body">
    <form action="add.php" method="post">
        <div class="form-group">
        <label for="name">Emp name</label>
        <input type="text" name ="name" id="name" class="form-control" required>
</div>
<div class="form-group">
        <label for="name">id</label>
        <input type="text" name ="id" id="name" class="form-control" required>
        <br>

        <div class="form-group">
        
        <input type="submit" name ="submit" vlaue="submit" class="btn btn-primary" required>
</div>
        
</div>
</form>
</div>