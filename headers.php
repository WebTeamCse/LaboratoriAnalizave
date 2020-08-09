
<html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" type="text/css" href="include/header.css"> -->  
<header>
<div class="navbar">    
                <div class="logo">
                <h1>Laboratori<span>Analizave</span></h1>
                </div> 

                <div class="side-nav">
                    <ul>
                        <li><a href="../Home/index.php">Ballina</a></li>
                        <li><a href="../Sherbimet/Sherbimet.php">Shërbimet</a></li>
                        <li><a href="../Terminet/view.php">Terminet</a></li>
                        <li><a href="../Doctoret/doctoret.php">Mjekët</a></li>
                        <li><a href="../CalendariLab/calendar.php">Kalendari</a></li>
                        <li><a href="../Location/Location.php">Lokacioni</a></li>
                    </ul>
                </div>
            </div>
            <div class="toggle">
                <div class="hamburger"></div>

    <div class="container">

    </div>
</header>
</html>

<style>
ul{
  margin:0;
  padding:0;
}

header
{
  height: 87px;
  background-color:#3e5669;
  color: white;
  border-bottom: rgb(77, 189, 197) 4px solid;
}
/******* Navigacion BAR *******/

.home-app {
    float: left;
    clear: both;
    background: #3e5669;
}

.other-app {
    float: right;
    display: inline-block;
    clear: both;
}

header nav{
    text-align: center;
    margin-top: 30px;
    position: relative;
    clear: both;
}

.navbar-responsive-icon {
    width: 30px;
    height: 30px;
    background: #3e5669;
    position: absolute;
    margin-top: -45px;
}


/***** s *****/



.logo  h1 {
    margin:0;
    padding:10px;
}
.logo h1 span {
    font-weight: 300;
}
.side-nav {
    position: absolute;
    right:0%;
    height:0px;
    overflow: hidden;
}

.side-nav-open {
    height: auto;
    clip-path:circle(100%);
}

.open .hamburger {
    transform: rotate(90deg);
}


.side-nav ul{
    margin:0;
    padding:0;
    list-style: none;
    background-color:#3e5669;
}
.side-nav a{
    text-decoration:none;
    background-color:#3e5669;
    display: block;
    font-size: 16px;
    font-weight: bold;
    color:white;
    padding:2em 4em;
    text-transform: uppercase;
}
.side-nav li{
    border-bottom: 1px solid #505050;
}
.side-nav a:hover , 
.side-nav a:focus {
    background-color:#1da7b1;
    color:#434343;
}
.side-nav li:last-child {
    border-bottom:none;
}

.toggle {
    position:absolute;
    padding:1em;
    right:0.75em;
    top:0.75em;
    cursor: pointer;
}
.hamburger , 
.haburger::before ,
.hamburger::after {
    content: '';
    display: block;
    height:3px;
    width:1.75em;
    background:white;
    border-radius:3px;
}
.hamburger::after {
    transform: translateY(8px);
}
.hamburger::before {
    transform: translateY(-15px);
}


@media (min-width:900px) {
    .toggle {
        display:none;
    }
    .side-nav {
        height:auto;
        position: relative;
        background:none;
        float:right;
        top:-2.15em;
    }
    .side-nav  li {
        display: inline-block;
        border:none;
    }
    .side-nav a {
        padding:5px 10px;
    }
    .side-nav a:hover {
        background: none;
        color:lightgrey;
    }
}

@media(max-width:1298px) {  
    .home-app {
        display: block;
    }
    .other-app {
        display: none;
    }
    .navbar-responsive-icon {
        opacity:1;
    }   
}

@media (min-width:1298px){
    nav ul .li-hidden {
        opacity: 1;
    } 
    .navbar-responsive-icon {
        opacity:0;
    }   

}
/* ****** endNavigavion ****** */
</style>
