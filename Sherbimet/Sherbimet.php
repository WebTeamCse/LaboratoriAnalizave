<?php
   // include "../Login/login-sherbimet.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
       
        <meta charset="utf-8">
        <title>Sherbimet</title>
        <link rel="stylesheet" type="text/css" href="styleSh.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
          integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
          crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
            include "../headers.php";
        ?>
<div class="title">
    <h1>Shërbimet Tona</h1>
</div>

<div class="sherbime">
    <ul >
        <li> 
            <div class="dropdown">
                <span>Analiza BioKimike / Klinike</span>
                <div class="dropdown-content">
                <p>GJAK KOMPLET,
                    SEDIMENT (VES),
                    GLICEMIA,
                    GOT,
                    GPT,
                    GAMMA GT,
                    BILIRUBINA DIREKTE,
                    BILIRUBINA INDIREKTE,
                    BILIRUBINA TOTALE,
                    FOSTATAZË ALKALINE,
                    KOLESTEROLI TOTAL,
                    KOLESTEROLI HDL,
                    KOLESTEROLI LDL,
                    TRIGLICERIDET,
                    AZOTEMIA,
                    KREATINEMIA,
                    ACIDI URIK,
                    PROTEINE TOTALE,
                    ELEKTROLITET,
                    FAKTORËT E KOAGULIMIT,
                    URINA KOMPLET.</p>
                </div>
              </div>
            </li>
        <li>
            <div class="dropdown">
                <span>Analiza Hormonale</span>
                <div class="dropdown-content">
                <p>FT3,
                    TSH,
                    FT4,
                    ANTI TPO,
                    FSH,
                    ESTRADIOL,
                    LH,
                    PROGRESTERON,
                    KORTIZOL,
                    PROLAKTINE,
                    TESTOSTERON.</p>
                </div>
              </div>
           
        <li>
            <div class="dropdown">
                <span>Analiza Virale</span>
                <div class="dropdown-content">
                <p>HBSAG,
                    HCVAB,
                    HIV 1-2,
                    HCV RNA,
                    HBV DNA.</p>
                </div>
              </div>
           </li>
        <li>
            <div class="dropdown">
                <span>Markues Tumoral</span>
                <div class="dropdown-content">
                <p>CA125,
                    CA15-3,
                    CA19-9,
                    CA50,
                    CA72-4,
                    PSA TOTALE,
                    PSA FREE,
                    ALFAFETOPROTEINA,
                    CEA,
                    HE4,
                    CYFRA21,
                    NSE.</p>
                </div>
              </div>
           </li>
        <li>
            <div class="dropdown">
                <span>Analiza Mikrobiologjike</span>
                <div class="dropdown-content">
                <p>AF GENITAL,
                    URINOKULTURA,
                    TAMPONE TE NDRYSHME.</p>
                </div>
              </div>
            </li>
        <li>
            <div class="dropdown">
                <span>Biopsi Histologjike</span>
                <div class="dropdown-content">
                <p>Për shumicën e mostrave të biopsisë, kjo përpunim rutinë është gjithçka që nevojitet. Në këtë pikë (zakonisht një ditë pasi është bërë biopsia), patologu shikon indet nën një mikroskop. Shikimi i mostrave të ngurta në këtë mënyrë quhet histologji, që është studimi i strukturave të qelizave dhe indeve.</p>
                </div>
              </div>
           </li>
        <li>
            <div class="dropdown">
                <span>Analiza Gjenetike dhe Karioptike</span>
                <div class="dropdown-content">
                <p>Është e rëndësishme, të mbahet mend se, gjenet tuaja ndikojnë vetëm
                    pjesërisht në rrezikun që të shfaqen e të zhvillohen shumica dërrmuese
                    e sëmundjeve. Faktorë të tillë si historia juaj mjekësore, stili juaj i jetesës
                    si dhe mjedisi juaj luajnë, gjithashtu, një rol të rëndësishëm.</p>
                </div>
              </div>
           </li>
    </ul>
    
</div>
      

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