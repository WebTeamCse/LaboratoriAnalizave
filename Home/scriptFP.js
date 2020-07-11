
function validateForm() {
    var text = getElementById("sms");
    
      // let includex = x.include("+");
      // if(includex == true){
      //     alert("includex "+includex);
          
      // }
      if(text.value.trim() === ""){
       alert("name is null"); 
       return false;
      }
      return true;
      // alert("All Data Submitted Successfully!");
      // event.preventDefault();
      //window.location.href="LaboratoriAnalizave/Home/indexFP.php";
      
    }