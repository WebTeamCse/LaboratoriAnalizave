

function validate() {
  var username = document.getElementById("email");
  var password = document.getElementById("password");
    // let includex = x.include("+");
    // if(includex == true){
    //     alert("includex "+includex);
        
    // }
   
     if(username.value.trim() === ""){
      alert("username is null"); 
      return false;
     }
     if(password.value.trim() === ""){
      alert("password is null"); 
      return false;
     }
    return true;
    
    
  }