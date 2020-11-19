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
    <legend><b> ADD PRODUCT </b></legend>
    <div>
	 </div>
	 
	   <div>
	
<label> Name  </label><br>
        
<input type="email" name="email" id="email" value=<?php $name ?>> 
<span class="error">*<?php echo $emailErr;?></span> <br> <br> 

<label> Buying Price </label><br>
        
<input type="email" name="email" id="email" value=<?php $name ?>> 

<span class="error">*<?php echo $emailErr;?></span> <br>  <br>

<label> Selling Price </label><br>
        
<input type="email" name="email" id="email" value=<?php $name ?>>

<span class="error">*<?php echo $emailErr;?></span>


    
    </div>
    <hr>
    <input type="submit" name="submit" value="submit">
    <input type="reset" name="reset" value="reset"> <br>
	<br>

    
  </fieldset>

  
  <br> <br><br> <br>
  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  
  </form>
    