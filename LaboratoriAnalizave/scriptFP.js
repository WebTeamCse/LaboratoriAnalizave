
function validateForm() {
    var x = document.forms["form"]["sms"].value;
      // let includex = x.include("+");
      // if(includex == true){
      //     alert("includex "+includex);
          
      // }
    
  
      if (x == "" ) {
          alert("sms must be filled out");
          return false;
        }
  
      if(x.indexOf("+")>=0 || x.indexOf("*")>=0 || x.indexOf("/")>=0 || x.indexOf("#")>=0) {
          alert("sms shoulden\'t contains one of these (* + / #)");
            return false;
      }
      
    
      alert("All Data Submitted Successfully!");
      event.preventDefault();
      
    }