<?php 
//linked to updating_profile.php
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
body{
  background-color:purple;}
  </style>
    <title>Hello, world!</title>
   
  </head>
  <body>
   
    <div  class="login_div">
<form class="login_form" method = "POST"  >

  <div style =  "
    text-align:center;width:50%;" class="form-group">
    <label for="email"></label>
    <input  type="text" name = "email"class="form-control"  placeholder = "Enter your email" aria-describedby="emailHelp" required>
  </div>
 

  
  <div class="center">
  <button style = "position:center;width:15%;"type="submit" name = "submit" class="form-control btn btn-success">Submit</button>
  </div>

</form>
 </div> 

<div style="width:50%;margin:0 auto">
<?php 
$conn = mysqli_connect('localhost','root','' ,'practise')
or die("Connection Failed");
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $query = "select * from profile where p_email = '$email'";
  $run = mysqli_query($conn,$query);
  if(mysqli_num_rows($run) > 0)
  {

    while($row = mysqli_fetch_array($run)){
      ?>
  <br><br>
  <div  style = "
    width: 600px;
    height: 800px;
    
    background: grey;
  /*  border-radius: 10px;*/

    margin: 0;
    padding: 0;" >

    <form  style = "background-color:purple"
    class="login_form" method = "POST" action = "./updating_profile.php">
    <h1 style = "text-align:center;color:white;">MY PROFILE</h1>
  <div class="form-group">
    <label style = "color:white;"  for="designation">Designation:</label>
    <input style = "color:black;" type="text"  class="form-control" value =  " <?php echo $row['designation']?>"  placeholder="Enter your position" name="designation" aria-describedby="emailHelp" required>
  </div>

  <div class="form-group">
    
    <label style = "color:white;" for="email">Email:</label>
    <input style = "color:black;" type="email"  class="form-control" value = " <?php echo $row['p_email']?>"  placeholder="Enter your email_id" name="email" aria-describedby="emailHelp"required>
  </div>

  

  <div class="form-group">
    <label style = "color:white;" for="Address">Address:</label>
    <input  style = "color:black;" type="text" class="form-control"  value =  "<?php echo $row['Address']?>" placeholder="Enter your address" name="Address"required>
  </div>

  <div class="form-group">
    <label style = "color:white;" for="SSC_marks">SSC Marks:</label>
    <input style = "color:black;"  type="text" value =  "<?php echo $row['SSC_marks']?>"  class="form-control"placeholder="Enter your marks" name="SSC_marks" aria-describedby="emailHelp" required>
  </div>

  <div class="form-group">
    <label style = "color:white;" for="HSC_marks">HSC Marks:</label>
    <input style = "color:black;"  type="text"   value = "<?php echo $row['HSC_marks']?>" class="form-control" placeholder="Enter your marks" name="HSC_marks" aria-describedby="emailHelp" required>  </div>
  <div class="form-group">
    <label style = "color:white;" for="Graduation_marks">Graduation Marks:</label>
    <input  style = "color:black;" type="text" value =  "<?php echo $row['Graduation_marks']?>"  class="form-control" placeholder="Enter your marks" name="Graduation_marks"aria-describedby="emailHelp" required>
  </div>

  <div class="form-group">
    <label style = "color:white;" for="Joining_date">Joining Date:</label>
    <input style = "color:black;" value =  " <?php echo $row['Joining_date']?>"  placeholder="Enter your 
  joining date" name="Joining_date"  class="form-control"  aria-describedby="emailHelp" required>
  </div>

  <div class="form-group">
    <label  style = "color:white;" for="department">Department:</label>
    <input style = "color:black;"  type="text"  value =  " <?php echo $row['department']?>"  class="form-control"  placeholder="Enter Department" name="department" aria-describedby="emailHelp"required>
  </div>

  <div class="form-group">
    <label style = "color:white;" for="Experience">Experience:</label>
    <input  style = "color:black;" type="text" value =  " <?php echo $row['Experience']?>"  class="form-control" placeholder="Enter your work
   experience" name="Experience" aria-describedby="emailHelp"required>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label style = "color:white;"  class="form-check-label" for="exampleCheck1">Check me out</label>
  
</div>


  <div class="center">
  <button type="submit" name = "update" class="form-control btn btn-success">Update</button>
</div>

</form> 

</div>





<?php
    }
  }
  else{
    echo "<script>alert( 'Kindly fill the profile form first as no  earlier profile record found ');window.location.href='../../displayingg_be/profile_final_form.php';</script>";
  
  }
}


?>
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  </body>
</html>