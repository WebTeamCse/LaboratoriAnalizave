
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
            include "../header.php";
        ?>
      
        <section class="foto">
                    <div >
                        <ul class="connect">
                            <li class="login"> <a href="../LaboratoriAnalizave/LogIn/indexLog.html">Log In </a></li>
                            <li class="signup"> <a href="../LaboratoriAnalizave/Register/indexRegister.html">Sign Up</a></li>
                          </ul>
                       
                    </div>

                   
                    <div class="container">
                        <h1>" Happiness is the highest form of health"</h1>    
                    </div>
            <section class="tel">
                        <ul class="callul">
                            <li><a href="#"><img class="scroll" src="../img/call3.png"></a></li>
                        </ul>
    
            </section>
                </section>

                

        <section class="contact">
            <div class="talk">
                <p>Talk to an expert <br>+383 44 256 990</p>
            </div>
            <ul class="email">
                
               <li> <p>Kontaktoni me ne! </p> </li>  
               <form id="form" action="/indexFP.php" method="get" onsubmit="return validateForm()">  
               <li><input type="text" id="sms" name="sms" placeholder="SMS"></li>
                <li><button class="send" type="submit" class="Subscibe">Dërgo</button></li>             
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