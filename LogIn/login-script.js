
function validateForm() {
    var x = document.forms["form"]["email"].value;
    var y = document.forms["form"]["password"].value;
    // let includex = x.include("+");
    // if(includex == true){
    //     alert("includex "+includex);
        
    // }

    if (x == "" ) {
        alert("Email must be filled out");
        return false;
      }

    if(x.indexOf("+")>=0 || x.indexOf("*")>=0 || x.indexOf("/")>=0 || x.indexOf("#")>=0) {
        alert("Email shoulden\'t contains one of these (* + / #)");

    }
    
    if (y == "") {
        alert("Password must be filled out");
        return false;
      }
      if(y.indexOf("+")>=0 || y.indexOf("*")>=0 || y.indexOf("/")>=0 || y.indexOf("#")>=0) {
        alert("Password shoulden\'t contains one of these (* + / #)");
        return false;
    }
    alert("OK");
    event.preventDefault();
  }