<?php 
if(isset($_POST['submit'])){
    $conn = mysqli_connect('localhost','root','' ,'practise') or die("Connetion Failed");
    $email = $_POST["email"];
    echo'$email';

}
    ?>
   
