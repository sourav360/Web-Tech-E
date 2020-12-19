function validate(){  
  var name=document.f1.name.value;
  var email=document.f1.email.value;
  var address=document.f1.address.value;
  var city=document.f1.city.value;
  var road=document.f1.road.value;
  var zip=document.f1.zip.value;
  var cardname=document.f1.cardname.value;
  var cardnumber=document.f1.cardnumber.value;
  var expmonth=document.f1.expmonth.value;
  var expyear=document.f1.expyear.value;
  var cvv=document.f1.cvv.value;


  var status=false;


  if(name==""){  
    document.getElementById("namelocation").innerHTML="Please enter your name";  
    status=false;
  }else{  
    document.getElementById("namelocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
    status=true;
  }

  if(email=="") {
    document.getElementById("emaillocation").innerHTML="Please enter your email address";
  } else {
    // Regular expression for basic email validation
    var regex = /^\S+@\S+\.\S+$/;
    if(regex.test(email) === false) {
      document.getElementById("emaillocation").innerHTML="Please enter vaild email address";
    } else{
      document.getElementById("emaillocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";
      status=true;
    }
  }

  if(address==""){  
    document.getElementById("addresslocation").innerHTML="Please enter your address";  
    status=false;
  }else{  
    document.getElementById("addresslocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
    status=true;
  }

  if(city==""){  
    document.getElementById("citylocation").innerHTML="Please enter your city";  
    status=false;
  }else{  
    document.getElementById("citylocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
    status=true;
  }

  if(road==""){  
    document.getElementById("roadlocation").innerHTML="Please enter your road";  
    status=false;
  }else{  
    document.getElementById("roadlocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
    status=true;
  }

  if(zip==""){  
    document.getElementById("ziplocation").innerHTML="Please enter your zip";  
    status=false;
  }else{  
    document.getElementById("ziplocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
    status=true;
  }

  if(cardname==""){  
    document.getElementById("cardnamelocation").innerHTML="Please enter your cardname";  
    status=false;
  }else{  
    document.getElementById("cardnamelocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
    status=true;
  }

  if(cardnumber==""){  
    document.getElementById("cardnumberlocation").innerHTML="Please enter your cardnumber";  
    status=false;
  }else{  
    document.getElementById("cardnumberlocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
    status=true;
  }

  if(expmonth==""){  
    document.getElementById("expmonthlocation").innerHTML="Please enter your expmonth";  
    status=false;
  }else{  
    document.getElementById("expmonthlocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
    status=true;
  }

  if(expyear==""){  
    document.getElementById("expyearlocation").innerHTML="Please enter your expyear";  
    status=false;
  }else{  
    document.getElementById("expyearlocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
    status=true;
  }

  if(cvv==""){  
    document.getElementById("cvvlocation").innerHTML="Please enter your cvv";  
    status=false;
  }else{  
    document.getElementById("cvvlocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
    status=true;
  }
    
  return status;  
}  