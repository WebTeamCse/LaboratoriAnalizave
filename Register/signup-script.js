
function validate() {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var username = document.getElementById("username");

    var password = document.getElementById("password");
      // let includex = x.include("+");
      // if(includex == true){
      //     alert("includex "+includex);
          
      // }
      if(name.value.trim() === ""){
       alert("name is null"); 
       return false;
      }
      if(email.value.trim() === ""){
        alert("email is null"); 
        return false;
       }
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