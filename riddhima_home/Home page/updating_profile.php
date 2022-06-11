<?php 


$conn = mysqli_connect('localhost','root','' ,'practise')
or die("Connection Failed");
if(isset($_POST['update'])){

     $department = $_POST['department'];
     $designation = $_POST['designation'];
     $P_email = $_POST['email'];
     $Address = $_POST['Address'];
     $SSC_marks = $_POST['SSC_marks'];
    $HSC_marks = $_POST['HSC_marks'];
    $Graduation_marks = $_POST['Graduation_marks'];
    $Experience = $_POST['Experience'];
     $Joining_date = $_POST['Joining_date'];

    $sql = "update  profile set 
        designation = '$designation',
       
        P_email = '$P_email',
        Address = '$Address',
        SSC_marks = '$SSC_marks' , 
        HSC_marks = '$HSC_marks' ,
        Joining_date = '$Joining_date' ,
        Graduation_marks = '$Graduation_marks ' ,
        Experience = '$Experience '  ,
        department  = '$department' ";
        $run = mysqli_query($conn , $sql);
        if($run)
            echo "<script>alert('Your data has been successfully updated!');window.location.href='./fetching_profile.php';</script>";
        

    }




?>