<?php

$conn = mysqli_connect('localhost','root','' ,'practise')
or die("Connection Failed");

//ye succesful page bna h login ka  n it is linked wid login_maitri_code.php
//bas correct table k sath match kar dena h 
if(isset($_POST['login'])){
    


   // $email = $_POST['email']; to make it secure
   //md makes d password global

    //query to match the password and username
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    
   

  
    
    $query = mysqli_query($conn,"select * from signup where e_email = '$email' AND e_password = '$password' ");
    $row  = mysqli_num_rows($query);
    if($row >= 1)
    {
    echo "<script>alert( 'You have loginned sucessfully');window.location.href='./welcome_page.php.html';</script>";
 }
    
else{
  
    echo "<script>alert('You have entered wrong details');window.location.href:'./enetrance.php';</script>";
     
    }

  
  




}

?>

