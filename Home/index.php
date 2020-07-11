<?php 
    session_start();
    require '../crud/dbconfig.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laboratori i Analizave</title>
        <link rel="stylesheet" type="text/css" href="styleFP.css">
        <script src="scriptFP.js"></script>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
<body>
<?php
    include "../headers.php";
?>

<section class="foto">
    <?php 
        if(isset($_SESSION['userId'])){
            include "logout.php";
            ?>
                <div class="edit"> 
            <button><a href="edit-users.php">Edit Profile</a></button>
            </div> 
            <?php
            if($_SESSION['userId'] == 10){
            include "admin.php";
        }
        }else{
            include "login.php";
        }
        
        // var_dump($_SESSION['userId']);


        //Contact US
        
        
    //    $_POST['userID'] = $_SESSION['userId'];
        //var_dump($_SESSION['userId']);
        if(isset($_POST["submit"])){
            $sms = $_POST['sms'];

            $sql = 'INSERT INTO sms(content, user_id) VALUES 
            (:content, :user_id)';
    
            $query = $conn-> prepare($sql);
            // $query->bindParam(":sms", $sms);
            // $query->bindParam(":user_id",$_POST['userID']);
            // $query->execute();
            //Array
            $query->execute([
                'content' => $sms,
                'user_id' => $_SESSION['userId']
            ]);
    
            echo '<script language="javascript">window.location.href ="index.php"</script>';
        }
    ?>     
    <?php if(isset($_SESSION['userId'])) : ?>
        <!-- <div class="edit"> 
            <button><a href="edit-users.php">Edit Profile</a></button>
            </div>   -->
            <?php endif; ?>

            
            <div class="container">
                <h1>" Happiness is the highest form of health"</h1>    
            </div>

        </section>

<section class="contact">
    <div class="talk">
        <p>Talk to an expert <br>+383 44 256 990</p>
    </div>
    <ul class="email">
        
        <li> <p>Kontaktoni me ne! </p> </li> 

        <form id="form" action="index.php" method="post" onsubmit="return validateForm()">  
        <li><input type="text" id="sms" name="sms" placeholder="SMS for any problem"></li>
        <li><button class="send" type="submit" name="submit">Dërgo</button></li>             
        </form>
    </ul>         
</section>
<?php
include "../includes/sliderLA.php";
?>
<section class="rrethnesh">   
    <h1>Rreth nesh<br><br></h1>
    <div class="container2">
        <h2>Objektivat<br><br></h2>
        <ul>
            <li>- Parandalimi i sëmundjeve duke ofruar një shërbim shëndetësor cilësor të standarteve evropiane për popullsinë shqiptare.<br></li>
            <li>- Të ndihmohet në përmirësimin e kushteve të jetës dhe të shëndetit të personave.<br></li>
            <li>- Të ndihmohet në formimin e popullsisë, në veçanti të rinisë, qoftë për formimin profesional qoftë për atë universitar.<br></li>
            <li>- Të ndihmohet i afërmi, më të dobtit dhe ata që janë në nevojë.<br></li>
            <li>- Të ecet gjithmonë me kohën për gjithçka që u përket shërbimeve shëndetësore dhe formimit të përhershëm të personelit që shërben në strukturat e Fondacionit etj<br><br></li>
        </ul>
            </div>
    <div class="drejtat"> 
        <h2>Të Drejtat dhe Përgjegjsitë<br><br></h2>
        <ul>
            <li>- Ju keni të drejtë të dëgjoheni dhe respektoheni pa dallim seksi,moshe,race,gjinie,feje etj.<br></li>
            <li>- Ju keni të drejtë të informoheni për emrin e mjekut,infermieres,teknikut që ju ofron sherbimin mjekësor.<br></li>
            <li>- Ju keni të drejtë të keni një kopje të pershkrimit të ekzaminimitsi p.sh (eko, R-grafi etj).<br></li>
            <li>- Ju duhet të jeni të bindur për ruajtjen e privatësisë së gjithë dokumentacionit tuaj shëndetësor.<br></li>
            <li>- Ju keni të drejtë që për cdo sherbim mjekësor të pajiseni me faturë.<br></li>
            <li>- Ju duhet të sillni gjithnjë më vete rekomandimin e mjekut për të bërë ekzaminime,analiza laboratorike R-grafi, Eko etj.<br></li>
            <li>- Ju duhet ti keni gjithnjë më vete dokumentacionin që informon mjekun për historikun e sëmundjes tuaj të mëparshme,medikamentet që keni përdorur apo po përdorni momentalisht.<br></li>
        </ul>


    </div>
    <div class="section2">
        <?php
        if(isset($_SESSION['userId'])){
            include "../Login/profile.php";
        }else{
            //header("location:../Home/indexFP.php");
        }
            
        ?>
    </div>
</section>

    <?php
        include "../footer.php";
    ?>

</body>
    
  
    <script>
                
            $('.toggle').click(function() {
    
                        $('.side-nav').toggleClass('side-nav-open', 500);
                        $(this).toggleClass('open');
                    });
                
            
    </script>
    
    
    
</html>