





<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}
a{
  text-decoration:none;
}
/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
*{
        background-color :purple; 

      }

      button{
        color:white;
        background-color:green;
        width: 150px;
        height:35px;
        text-align:center;
      }
      button a{
        color:white;
        background-color:green;
      }
     .cont {top: 50%;
    left: 50%;
    margin-top: 50px;
    margin-left: 150px;
      
      }
      .login_form {
    

    background:purple;
  /*  border-radius: 10px;*/

    margin: 0;
    padding: 0;
}
.input-field{
  
  background-color : white;
}
placeholder{
  color:white;
}
}
</style>
</head>
<body>
<div class = "cont">
<form class="login_form"  action= "actions.php" method = "post" style="max-width:500px;margin:auto">
  
<h2 style = "text-align :center;color:white"><strong>Registration Form</strong></h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="First Name" name="FirstName" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Last Name" name="LastName"required>
  </div>

   <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Phone Number" name="number"required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email"required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password"required>
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder=" Confirm Password" name="c_pasword"required>
  </div>

  
  <button type="submit" name = "register">Register</button>

  <button type = "submit" name = "login" href = "./enetrance.php" style = "text:decoration:none;color:white;">Login</button>
</form>
    </div>
</body>
</html>