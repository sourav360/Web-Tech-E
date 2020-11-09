<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UFT-8>
  <title>* Sourav Gupta *</title>
  <h1><span style="color: Green;"> @ inventory management system  @ </span></h1>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>

<?php
// define variables and set to empty values
$email = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $emailErr = "This is required";
      } else {
        $email = test_input($_POST["email"]);
      }
}


?>





<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">




  <fieldset>
    <legend>Login System:</legend>
    <div>
	 </div>
	 
	   <div>
	
<label> UserName  </label>
        
<input type="email" name="email" id="email" value=<?php $name ?>> <br> <br>

<label> Password   </label>
        
<input type="email" name="email" id="email" value=<?php $name ?>>

<span class="error">*<?php echo $emailErr;?></span>

    
    </div>
    <hr>
    <input type="submit" name="submit" value="submit">
    <input type="reset" name="reset" value="reset"> <br>
	<br>

    
  </fieldset>

  
  <br> <br><br> <br>
  
  
    <fieldset>
    <legend>Profile :</legend>
    <div>


	<label> Name  </label>
        
<input type="email" name="email" id="email" value=<?php $name ?>> <br> <br>

<label> Email   </label>
        
<input type="email" name="email" id="email" value=<?php $name ?>>

<span class="error">*<?php echo $emailErr;?></span>  <br/>   <br/>

<label> New Password </label>
        
<input type="email" name="email" id="email" value=<?php $name ?>> <br> <br>

<label> Confirm Password  </label>
        
<input type="email" name="email" id="email" value=<?php $name ?>> <br> <br>


	
	<label> Gender  </label>
	<label for="male"> Male </label>
	    <input type="radio" id="male" name="gender" required autofocus /> 
        <label foe="female">Female<label>
        <input type="radio" if="female"	name="gender" required autofocus /><br />	<br/>
	
	<label> Blood Group  </label>
<label for="male"> A Positive </label>
	    <input type="radio" id="male" name="gender" required autofocus /> 
        <label foe="female"> B Positive <label>
        <input type="radio" if="female"	name="gender" required autofocus /><br />	<br/>
    

    
    </div>
    <hr>
    <input type="submit" name="submit" value="submit"> 
      <input type="reset" name="reset" value="reset"> <br>
    
  </fieldset>
  
  </form>
    