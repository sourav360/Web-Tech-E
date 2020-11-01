<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UFT-8>
  <title>* Sourav Gupta *</title>
  <h1><span style="color: Green;"> @ Login form  @ </span></h1>
   
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

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

  <fieldset>
    <legend>Name:</legend>
    <div>

<input type="email" name="email" id="email" value=<?php $name ?>>
<span class="error">*<?php echo $emailErr;?></span>

    
    </div>
    <hr>
    <input type="submit" name="submit" value="submit"> <br>

    
  </fieldset>

  
    <fieldset>
    <legend>Email:</legend>
    <div>

<input type="email" name="email" id="email" value=<?php $name ?>>
<span class="error">*<?php echo $emailErr;?></span>

    
    </div>
    <hr>
    <input type="submit" name="submit" value="submit"> <br>

    
  </fieldset>
  
  
    <fieldset>
    <legend>Gender</legend>
    <div>

	<label for="male"> Male </label>
	    <input type="radio" id="male" name="gender" required autofocus /> 
        <label foe="female">Female<label>
        <input type="radio" if="female"	name="gender" required autofocus /><br />	<br/>
    
    </div>
    <hr>
    <input type="submit" name="submit" value="submit"> <br>

    
  </fieldset>
  
  
  
  
    <fieldset>
    <legend>Degree</legend>
    <div>

	<input type="checkbox" id="contact1" name="contact1" value="E-mail">
         <label for="contact1"> S.S.C </label>
         <input type="checkbox" id="contact2" name="contact2" value="Postal Male">
         <label for="contact2"> H.S.C </label>
         <input type="checkbox" id="contact3" name="contact3" value="Telephone">
         <label for="contact3"> B.S.C </label><br><br>
    </div>
    <hr>
    <input type="submit" name="submit" value="submit"> <br>

    
  </fieldset>
  
  
  
     <fieldset>
    <legend>Blood Group</legend>
    <div>

	<label for="male"> A Positive </label>
	    <input type="radio" id="male" name="gender" required autofocus /> 
        <label foe="female"> B Positive <label>
        <input type="radio" if="female"	name="gender" required autofocus /><br />	<br/>
    
	
    </div>
    <hr>
    <input type="submit" name="submit" value="submit"> <br>

    
  </fieldset>
  
  
  
  
  
  
  
  
  
  
  
  
</form>
    
</body>
</html>