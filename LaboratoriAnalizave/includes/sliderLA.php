
<html>
<div class="slider">
  
         
          
            <div class="slides">
              <div id="slide-1">
              <img src="img/Galery3.PNG" alt="">
              </div>
              <div id="slide-2">
              <img src="img/galery2.PNG" alt="photo">
             
              </div>
              <div id="slide-3">
              <img src="img/Galery1.PNG" alt="photo">
              </div>
              <div id="slide-4">
              <img src="img/galery2.PNG" alt="photo">
              </div>
              <div id="slide-5">
              <img src="img/Galery3.PNG" alt="photo">
              </div>
              <div id="slide-6">
              <img src="img/Galery1.PNG" alt="photo">
              </div>
              <div id="slide-7">
              <img src="img/galery2.PNG" alt="photo">
              </div>
              <div id="slide-8">
              <img src="img/Galery3.PNG" alt="photo">
              </div>
              
            </div>
            <div class="thumbs">
            <a href="#slide-1"><img src="img/Galery3.PNG" alt="photo"></a>
            <a href="#slide-2"><img src="img/galery2.PNG" alt="photo"></a>
            <a href="#slide-3"><img src="img/Galery1.PNG" alt="photo"></a>
            <a href="#slide-4"><img src="img/Galery3.PNG" alt="photo"></a>
            <a href="#slide-5"><img src="img/galery2.PNG" alt="photo"></a>
            <a href="#slide-6"><img src="img/Galery1.PNG" alt="photo"></a>
            <a href="#slide-7"><img src="img/Galery3.PNG" alt="photo"></a>
            <a href="#slide-8"><img src="img/galery2.PNG" alt="photo"></a>
            </div>
          </div>
</html>


<style>
  .slider-div{
    width: 85%;
  background-color:white;
  margin-left:auto;
  margin-right:auto;
}
.slider {
    width: 85%;
    text-align: center;
    overflow: hidden;
    margin-left:auto;
    margin-right:auto;
    background-color:white; 
    
    
    /* padding-left: 17px;
    padding-right: 17px; */
  }  
  .slides {
    width: 880px;
    display: flex;
    overflow-x: auto;
    overflow: hidden;
    padding-top: 36px;
    margin-left:auto;
    margin-right:auto;
    border-radius:30px;

  }
  .slides div {
    padding-top:20px;
    margin-left:auto;
    margin-right:auto;
    flex-shrink: 0;
    width:880px;
    height: 320px;
    border-radius: 10px;
    background: #eee;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 100px;
  }
.slider a {
    display: inline-flex;
    width: 5px;
    height:5px;
    padding: 10px;
    background: white;
    text-decoration: none;
    align-items: center;
    justify-content: center;
    border-radius: 50%; 
    position: relative;
  }
  .slides img{
    width: 880px;
    
  }
  .thumbs{
    width:950px;
    margin-top:20px;
    margin-left:auto;
    margin-right:auto;
    
  }
  .thumbs a{
   
    margin-right: 45px;
    margin-left: 37px;
    margin-top:20px;
    
   
  }
  .thumbs img{
    width:65px;
    border-radius:5px
  }
  </style>