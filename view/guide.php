
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/Css/StyleHome1.css">
  <link rel="stylesheet" href="../public/Css/contactStyle2.css">
  <link rel="stylesheet" href="../public/Css/guideStyle.css">
  <title>My Website</title>
  

 

  <!-- Vendor CSS Files -->
  
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
 
   <!-- Bootstrap CSS -->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
   integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

</head>
<body>
  <!-- Header -->
  <?php include('header.php') ?>
  <!-- End Header -->
   <!-- Hero Section  -->
   <section id="hero">
    <div class="hero container">
      <div>
        <h1>Bienvenue  <span></span></h1>
        <h1> à l'auto-école <span></span></h1>
        <h1>Ayoub amin <span></span></h1>
        <a href="inscription.php" type="button" class="cta">Inscription en ligne</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

 <!-- ======= About Us Section ======= -->
 <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="../public/Images/couverture/pexels-photo-248539.jpeg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>Ecoles "Ayoub amin"</h2>
              <p>Bienvenue sur le site officiel d'Ayoub Amin pour une auto-école dans les environs de la ville.</p>
            </div>
            <div class="B1" >
            <a href="#collapse1" > <input type="button" class="btn btn-danger btn-lg " value="Guide du candidat" style="  border: 1px solid rgba(0, 0, 0, 0.7); "> </a>
            <a href="#collapse2" > <input type="button" class="btn btn-Light btn-lg " value="permis de conduire" id="btn6" style="  border: 1px solid rgba(0, 0, 0, 0.7); "> </a>
            <a href="#collapse3" > <input type="button" class="btn btn-dark btn-lg " value="Informations Utiles" style="  border: 1px solid rgba(0, 0, 0, 0.7); "> </a>
   
             </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->

<style>
.B1{
    margin-top: 100px;
    display: flex;
    flex-direction: row;
    margin-left:30px ; 
}
 
@media (max-width: 768px) {
    .B1{
        margin-right: auto;
    margin-left: auto;
    flex-direction: column;

    }
    #btn6{
        margin: 6px 0px 6px -3px;
    }
  }
  
</style>
    <!-- collapse -->
    <!-- collapse 1 Guide du condidat-->

    <div class="container" style="margin-top:440px;" id="collapse1">
    <center>
        <h2>Guide du candidat</h2>
    </center>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">     
                <span class="title">La constitution du dossier de l'examen </span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                <div class="card-body">
                <div class="panel-body"><p>Pour s’inscrire à un examen du permis de conduire, il faut déposer un dossier auprès du centre immatriculateur de la résidence du candidat, en règle générale, c’est l’auto ecole qui s’en charge. Le dossier de candidature doit être constitué comme suit :<br>
    
    <i class="fa fa-minus"></i> Une demande établie sur un imprimé spécial, dûment timbrée et signée par le candidat.<br>
    <i class="fa fa-minus"></i> Une photocopie certifiée conforme de la carte d’identité nationale.<br>
    <i class="fa fa-minus"></i> Reçu de paiement des droits de timbre et de rémunération de service institués par la législation en vigueur;<br>
    <i class="fa fa-minus"></i> Un certificat médical établi depuis moins de trois mois par un médecin agréé par le Ministre de la Santé Publique et le Ministre des Transports ; ce certificat atteste que le candidat a les capacités requises pour la conduite d’un véhicule.<br>
    <i class="fa fa-minus"></i> Une attestation de fin de formation pour la candidature à l’examen pour l’obtention de la catégorie sollicitée délivrée par l’établissement d’enseignement de la conduite agrée;<br>
    <i class="fa fa-minus"></i> Deux photos d’identités récentes de face, en couleur, de format 3,5cm x 4,5cm sur fond blanc.<br>
    <i class="fa fa-minus"></i> Une photocopie de permis de conduire en cas d’extension.<br>
    <i class="fa fa-minus"></i> En cas d’annulation du permis de conduire de l’après période probatoire suite à la perte de la totalité des points, une attestation de suivi de la session d’éducation à la sécurité routière obligatoire ;<br>
    <i class="fa fa-minus"></i> En cas d’annulation du permis de conduire suite à la perte de la totalité des points, une copie de l’accusé de restitution du permis de conduire au service compétant chargé de la délivrance du permis de conduire.<br>
    </p>
    </div>
                  </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">     
                <span class="title">Dépôt du Dossier</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
    <p>Le dossier doit être déposé au centre immatriculateur de la résidence du candidat, une convocation lui sera remise fixant la date et l’heure de l’examen.
    </p>
           </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
                <span class="title">Présentation de l'examen</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
     <p>Contrôler l’acquisition des connaissances théoriques et pratiques nécessaires pour conduire d’un véhicule en toute sécurité
     </p>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapsefor" aria-expanded="false">
                <span class="title">Epreuve théorique</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapsefor" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
            <div class="panel-body">
    <p>Il s’agit d’une épreuve orale portant sur les connaissances des règles du code de la route. Des questions vous seront posées par ordinateur et portant notamment sur<br>
    <i class="fa fa-minus"></i> Les règles de la signalisation routière (panneaux, signaux lumineux, marques routières)<br>
    <i class="fa fa-minus"></i> Les règles de la circulation ( vitesse, dépassement, priorité, stationnement,…)<br>
    <i class="fa fa-minus"></i> Les documents et accessoires obligatoires dont doivent être munis conducteur et véhicule.<br>
    Le déroulement de l’épreuve théorique se fait comme suit<br>
    <i class="fa fa-minus"></i> L’inspecteur des permis de conduire accueille les candidats et les fait entrer par groupe dans la salle d’examen.<br>
    <i class="fa fa-minus"></i> Avant de commencer la projection, l’examinateur explique aux candidats les consignes pour répondre aux questions posées.<br>
    <i class="fa fa-minus"></i> Le tirage au sort par ordinateur afin de savoir les questions :<br>
    <i class="fa fa-minus"></i> 40 questions pour les candidats à la catégorie B<br>
    <i class="fa fa-minus"></i> 46 questions pour les candidats aux catégories A, C, D et E.<br>
    <i class="fa fa-minus"></i> Les candidats commencent à répondre aux questions posées par l’intermédiaire d’une télécommande en appuyant sur les numéros correspondants aux bonnes réponses.<br>
    <i class="fa fa-minus"></i> À la fin de la séance, l’examinateur corrige la réponse à l’aide d’une correctrice automatique.<br>
    Pour les candidats au catégorie B : Si le nombre de bonnes réponses est supérieur à 30, le candidat se présente à l’examen pratique ; si non, il devra repasser l’examen dans un délai de 15 jours. Pour les candidats aux catégories A, C, D et E : Si le nombre de bonnes réponses est supérieur à 36, le candidat se présente à l’examen pratique ; si non, il devra repasser l’examen dans un délai de 15 jours.</p></div>
            </div>
            </div>
        </div>
       
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false">
                <span class="title">Epreuve pratique</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapsefive" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
                    <div class="panel-body">
    <p>Il s’agit d’une épreuve de conduite en circuit fermé et sur la voie publique pendant laquelle l’examinateur vous posera des questions d’ordre publique. Vous aurez à exécuter sur ordre de l’examinateur les principales manœuvre de conduite mettant ainsi en application vos connaissances théoriques.<br>
    Par exemple:<br>
    <i class="fa fa-minus"></i> La position du conducteur, le démarrage, la marche arrière, le changement de vitesse.<br>
    <i class="fa fa-minus"></i> Le démarrage en côte.<br>
    <i class="fa fa-minus"></i> Le demi-tour.<br>
    <i class="fa fa-minus"></i> Les virages, le croisement, le dépassement, le passage de carrefours.<br>
    <i class="fa fa-minus"></i> Le stationnement entre deux véhicules, l’arrêt,…<br>
    En cas de réussite, un permis provisoire valable 2 ans, vous sera remis après paiement de la taxe locale. A l’expiration de cette période, le permis provisoire vous sera échangé contre un permis définitif. Toutefois, l’échange est refusé si vous avez commis des infractions prévues par la réglementation en vigueur. En cas d’échec, une nouvelle date vous sera fixée pour l’examen dans un délai de 15 jours.</p></div>
            </div>
            </div>
        </div>
    </div>
</div>
<!--  End collapse 1-->


<!-- collapse 2 Le permis de conduire-->

<div class="container" style="margin-top:480px;" id="collapse2">
    <center>
        <h2>Le permis de conduire</h2>
    </center>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true">     
                <span class="title">Le permis à points </span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                <div class="card-body">
                <div class="panel-body"><p>Pour conduire un véhicule automobile, il faut être titulaire d’un permis délivré par les organismes publics compétents. Ce permis de conduire est obtenu après avoir réussi un examen théorique et un examen pratique dans un centre officiel d’examen.
                  <br><br>
                 	Au Maroc, le permis de conduire est affecté d’un certain nombre de points. En cas d’infraction au code de la route, des points peuvent être retirés en fonction d’un barème prédéfini. Parallèlement, le code de la route a instauré un système souple pour la récupération des points perdus, si le titulaire du permis de conduire observe certaines règles…
                                        </p>
    </div>
                  </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseTwo">     
                <span class="title"> Le capital initial de points</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
            <p> Le permis de conduire dispose d’un capital de 20 points pendant la période probatoire de 2 ans, et de 30 points quand il devient définitif…</p>
           </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false">
                <span class="title">Combien de points sur mon permis?</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseEight" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
            <p> C’est le Ministère de l’Equipement et des Transports qui est chargé de la gestion du système du permis à points au niveau de la base de données des conducteurs ainsi qu’il suit:<br>
           Le retrait des points est effectué sur la base des décisions judiciaires définitives prononcées par le Tribunal ou sur la base du document justifiant le paiement de l’amende transactionnelle et forfaitaire.<br>
           L’augmentation du solde de points est effectuée systématiquement si le conducteur remplit les conditions sus mentionnées. Le conducteur est informé par courrier de tout changement de son solde de points.</p>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false">
                <span class="title">Consultez vos infractions</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseNine" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
            <div class="panel-body">
            <p>Afin de vous satisfaire, nous mettons à votre disposition un lien pour savoir le solde de vos points :
             <a href="http://amende.mtpnet.gov.ma/Infraction/home.seam">http://amende.mtpnet.gov.ma/Infraction/home.seam</a>.</p></div></div></div>
            </div>
            </div>
        
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false">
                <span class="title">Le retrait de points est il effectué ?</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseTen" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
            <div class="panel-body">
            <p>Le retrait de points est effectué si le conducteur commet une infraction ou un délit passible de retrait. Ce retrait est opéré suivant le degré de gravité de l’infraction commise par le conducteur. Il est opéré dans le cas de 13 parmi plus de 120 contraventions très graves et dans le cas de 18 délits très graves…</p></div></div></div>
            </div>
            
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false">
                <span class="title">Les amendes</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseEleven" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
            <div class="panel-body">
            <p>Les Amendes Transactionnelles et Forfaitaires (ATF) sont des amendes qui s’appliquent aux contraventions pouvant faire l’objet d’une transaction et ce, par le paiement d’un montant forfaitaire fixé en fonction de la gravité de la contravention.<br>
            Le montant des ATF est fixé en fonction de la nature et de la gravité de la contravention. On distingue 3 classes d’ATF :<br>
            Les ATF de 1ère classe qui s’appliquent à 30 contraventions: 700 dh<br>
            Les ATF de 2ème classe qui s’appliquent à 35 contraventions: 500 dh<br>
            Les ATF de 3ème classe qui s’appliquent aux autres contraventions: 300 dh.</p></div></div></div>
            </div>
           
        
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false">
                <span class="title">Récupération des points</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseTwelve" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
            <div class="panel-body">
            <p>Le conducteur peut récupérer une partie des points perdus, s’il fait preuve de respect des règles de la circulation ou des conditions suivantes :<br>
            Récupération de 04 points à condition de suivre une session d’éducation à la sécurité routière organisée par les établissements autorisés à cet effet<br>
            Récupération de 04 points s’il ne commet pas d’infraction sanctionnée par le retrait de points pendant une année.<br>
            Récupération de la totalité de son solde de 30 points s’il ne commet pas d’infraction sanctionnée par le retrait de points pendant 3 ans.</p></div></div></div>
            </div>
          
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false">
                <span class="title">Les catégories de permis de conduire</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseThirteen" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
            <div class="panel-body">
            <p>
<strong>Catégorie « A1 »</strong>: Il faut être âgé au minimum de 16 ansgrégoriens révolus<br>
<i class="fa fa-minus"></i> Motocycle Iéger<br>
<i class="fa fa-minus"></i> Tricycle léger à moteur<br>
<i class="fa fa-minus"></i> Quadricycle lourd à moteur<br>
<br>

<strong>Catégorie « A »</strong>: Il faut être âgé au minimum de 18 ans grégoriens révolus<br>
<i class="fa fa-minus"></i> Motocycle Iéger<br>
<i class="fa fa-minus"></i> Tricycle à moteur<br>
<br>

<strong>Catégorie « B »</strong>: Il faut être âgé au minimum de 18 ans grégoriens révolus<br>
<i class="fa fa-minus"></i> Véhicules automobiles affectés au transport de personnes et comportant, outre le siège du conducteur, huit places assises au maximum ;<br>
<i class="fa fa-minus"></i> Véhicules automobiles affectés au transport des marchandises et ayant un poids total en charge (P.T.C) autorisé qui n’excède pas 3.500 kilogrammes ;<br>
<i class="fa fa-minus"></i> Véhicules agricoles à moteur, véhicules forestiers à moteur, engins de travaux publics à moteur et engins spéciaux à moteur, empruntant la voie publique, dont le poids total en charge autorisé n’excède pas 3.500 kilogrammes.<br>

Aux véhicules de cette catégorie peut être attelée une remorque dont le poids total en charge n’excède pas 750 kilogrammes ou dont le poids total en charge excède 750 kilogrammes, à condition que le poids total en charge autorisé du véhicule tracteur et de la remorque ainsi couplés n’excède pas 3.500 kilogrammes ou le poids total en charge autorisé de la remorque n’excède pas le poids à vide du véhicule tracteur.<br><br>

<strong>Catégorie « C »</strong>: Il faut être âgé au minimum de 21 ans grégoriens révolus<br>
<i class="fa fa-minus"></i> Véhicules automobiles affectés au transport de marchandises et dont le poids total en charge excède 3.500 Kilogrammes ;<br>
<i class="fa fa-minus"></i> Véhicules agricoles à moteur, véhicules forestiers à moteur, engins de travaux publics à moteur et engins spéciaux à moteur, empruntant la voie publique, dont le poids total en charge (P.T.C) autorisé excède 3500 kilogrammes.<br>
Aux véhicules de cette catégorie peut être attelée une remorque dont le poids total en charge autorisé n’excède pas 750 kilogrammes.<br><br>

<strong>Catégorie « D »</strong>: Il faut être âgé au minimum de 21 ans grégoriens révolus<br>
Véhicules automobiles affectés au transport de personnes comportant, outre le siège du conducteur, plus de huit places assises ou transportant plus de huit personnes non compris le conducteur.<br>
Aux véhicules automobiles de cette catégorie peut être attelée une remorque dont le poids total en charge autorisé n’excède pas 750 kilogrammes.<br><br>

<strong>Catégorie « E (B)»</strong>: Il faut être âgé au minimum de 18 ans grégoriens révolus.<br>
Véhicules relevant de la catégorie « B » , attelés d’une remorque dont le poids total en charge excède 750 kilogrammes, lorsque le poids total en charge de la remorque est supérieur au poids à vide du véhicule tracteur ou lorsque la somme des poids totaux en charge du véhicule tracteur avec la remorque est supérieur à 3500 kilogrammes.<br><br>

<strong>Catégorie « E (C)»</strong>: Il faut être âgé au minimum de 21 ans grégoriens révolus.<br>
Ensemble de véhicules couplés dont le véhicule tracteur entre dans la catégorie « C » (c), attelé d’une remorque dont le poids total en charge excède 750 kilogrammes.<br><br>

<strong>Catégorie « E (D)»</strong>: Il faut être âgé au minimum de 21 ans grégoriens révolus.<br>
Ensemble de véhicules couplés dont le véhicule tracteur entre dans la catégorie « D », attelé d’une remorque dont le poids total en charge excède 750 kilogrammes. Si les véhicules des catégories « A1 », « A » et « B » sont spécialement aménagés pour les personnes handicapées ceci doit être indiqué sur le permis de conduire concerné par des Symboles fixés par l’administration.<br><br>

<strong>Important</strong><br>
Chaque catégorie du permis de conduire ne permet que la conduite de la catégorie des véhicules correspondants tels que cités dans le tableau cité ci-dessus.<br><br>

<strong>Toutefois :</strong><br>
<i class="fa fa-minus"></i> le permis de conduire de la catégorie « E (C) » ou « E (D) est également valable pour la catégorie « E (B) », à condition que son titulaire soit en possession du permis de conduire de la catégorie « B ».<br>
<i class="fa fa-minus"></i> le permis de conduire de la catégorie « E (C) » est également valable pour la catégorie « E (D) », à condition que son titulaire soit en possession du permis de conduire de la catégorie « D ».<br>
<i class="fa fa-minus"></i> le permis de conduire de la catégorie « A » est également valable pour la catégorie « A1 ».<br>
</p></div></div></div>
            </div>
         
       
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false">
                <span class="title">Echange de permis de conduire</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseFourteen" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
                    <div class="panel-body">
                    <p>Le retrait de points est effectué si le conducteur commet une infraction ou un délit passible de retrait. Ce retrait est opéré suivant le degré de gravité de l’infraction commise par le conducteur. Il est opéré dans le cas de 13 parmi plus de 120 contraventions très graves et dans le cas de 18 délits très graves…</p></div>
            </div>
            </div>
        </div>
  <!-- collapse 3 Le permis de conduire-->
  

  <div class="container" style="margin-top:440px;"id="collapse3">
    <center>
        <h2>Guide du candidat</h2>
    </center>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="true">     
                <span class="title">Les vérifications de votre véhicule </span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseFifteen" class="collapse show" data-parent="#accordionExample">
                <div class="card-body">
                <div class="panel-body"><p>Avant de prendre la route, il est utile de s’assurer que le véhicule est en bon état et de faire procéder aux réparations et réglages éventuels. Vous trouverez ci-après les organes à vérifier ou à faire vérifier régulièrement:<br>
<i class="fa fa-minus"></i> Contrôlez l’état, l’usure et la pression des pneus, y compris de la roue de secours.<br>
<i class="fa fa-minus"></i> Prenez soins de respecter les pressions exactes, de vérifier l’équilibrage et le parallélisme de vos pneumatiques afin d’éviter une usure rapide, et une consommation d’essence plus élevé, mais surtout une adhérence incertaine.<br>
<i class="fa fa-minus"></i> Vérifiez l’état des amortisseurs.<br>
<i class="fa fa-minus"></i> Faites vérifier le système de freinage, la direction, la batterie.<br>
<i class="fa fa-minus"></i> Vérifiez les ampoules de tous les éclairages – Clignotants, Phares, feux arrières de stop, anti-brouillard, feux de marche arrière et de positions .-<br>
<i class="fa fa-minus"></i> Complétez les niveaux : huile de moteur, eau du lave-glace, batterie, liquides de freinage et de refroidissement.<br>
<i class="fa fa-minus"></i> Nettoyez le pare<br>
<i class="fa fa-minus"></i> brise, les vitres et les rétroviseurs, aussi bien à l’intérieur qu’à l’extérieur du véhicule.<br>
<i class="fa fa-minus"></i> Nettoyez régulièrement les phares et les feux de votre véhicule.<br>
<i class="fa fa-minus"></i> Vérifiez le fonctionnement et l’état des essuie-glaces.<br>
    </p>
    </div>
                  </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseTwo">     
                <span class="title">Tableau de bord</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseSixteen" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
            <p>Le tableau de bord est constitué d’un ensemble d’indicateurs et de témoins qui renseignent le conducteur d’un véhicule sur le fonctionnement du moteur et sur les paramètres de conduite (vitesse instantanée, température extérieure)<br><br>
            Dans le tableau de bord on trouve :</p><br>
            <table cellspacing="5">
<tbody>
<tr>
<td colspan="2"><span style="color:rgb(100, 7, 7);"><b>Les indications de couleur rouge sont celles qui ont la plus grande importance</b></span></td>
</tr>
<tr>

<td>Il alerte s’il y a un problème de freins, ou que le frein à main serré.</td>
</tr>
<tr>

<td>- Température du liquide de refroidissement: éviter de rouler quand ce voyant est allumé.</td>
</tr>
<tr>

<td>-&nbsp;<b>Indicateur de pression d’huile moteur :</b>&nbsp;Si, ce voyant reste allumé, il faut immobiliser le plus vite possible véhicule et couper le moteur pour éviter des dommages.<br>
Dans cette situation, il faut faire ces quelques vérifications :<p></p>
<ul>
<li>Vérifier le niveau d’huile moteur.</li>
<li>Regarder sous le véhicule pour voir s’il n’y a pas de perte d’huile. Si oui, appeler un garagiste (éviter de rouler avec le véhicule dans cet état).</li>
</ul>
</td>
</tr>
<tr>

<td>-&nbsp;<b>Indicateur de batterie :</b>&nbsp;signale l’insuffisance de la charge de la batterie. Donc risque de ne pas réussir à démarrer le moteur par exemple. il va falloir la recharger ou la changer.</td>
</tr>
<tr>

<td>- Ce témoin s’allume lorsque les feux de détresse sont allumés.</td>
</tr>
<tr>
<td colspan="2"></td>
</tr>
<tr>
<td colspan="2"><span style="color:rgb(100, 7, 7);"><b>Les témoins de couleur orange sont les témoins «&nbsp;pratiques&nbsp;»</b></span></td>
</tr>
<tr>

<td>- L’indicateur du niveau de carburant : Ce témoin s’allume lorsqu’il y a peu de carburant (la voiture roule en réserve).</td>
</tr>
<tr>

<td>- Pour les véhicules diesel, ce témoin indique que les bougies de préchauffage sont allumées, il faut attendre qu’elles s’éteignent avant de démarrer.</td>
</tr>
<tr>

<td>- C’est le témoin de starter (aide au démarrage).</td>
</tr>
<tr>

<td>- Désembuage arrière : signale si le désembuage sur la vitre arrière est actif. Le désembuage consomme beaucoup de puissance batterie, il ne faut pas l’oublier allumé.</td>
</tr>
<tr>
<td colspan="2"></td>
</tr>
<tr>
<td colspan="2"><span style="color:rgb(100, 7, 7);"><b>Les autres témoins sont mis à titre indicatif, ils sont néanmoins très utiles.</b></span></td>
</tr>
<tr>

<td>- Ce témoin s’allume lorsqu’on enclenche un des clignotants.</td>
</tr>
<tr>

<td>- Il apparaît dès que l’on allume les feux de croisement.</td>
</tr>
<tr>

<td>- Il indique que les feux de route sont mis (évitez de les utiliser aux mauvais endroits car il peuvent être la cause d’une amende).</td>
</tr>
<tr>

<td>- Les feux anti-brouillard sont entrain de fonctionner, il est dangereux de rouler avec lorsqu’il n’y a pas de brouillard.</td>
</tr>
<tr>

<td>-&nbsp;<b>Frain à main :</b>&nbsp;indique si le frein à main est serré.</td>
</tr>
<tr>

<td>-&nbsp;<b>Ceinture non bouclée :</b>&nbsp;la ceinture de sécurité étant obligatoire (de plus c’est très dangereux de rouler sans ceinture de sécurité bouclée) ce voyant sera allumé tant que vous ne l’avez pas mise.</td>
</tr>
<tr>

<td>-&nbsp;<b>Indicateurs : niveau de carburant et température du liquide de refroidissement.</b><br>
À gauche, indicateur de carburant restant pour circuler.<br>
À droite, indicateur de la température de refroidissement du moteur exprimée en degrés Celsius °C</td>
</tr>
<tr>

<td>- L’indicateur de Vitesse instantanée exprimée en kilomètres par heure (km/h).</td>
</tr>
<tr>

<td>- Le témoin Niveau du liquide de freinage.</td>
</tr>
<tr>

<td>- Niveau mini de carburant</td>
</tr>
</tbody>
</table>
<br><br>
<table cellspacing="5">
<tbody>
<tr>

<td>-&nbsp;<b>Feux de position :</b>&nbsp;signale si les feux de position sont allumés.</td>
</tr>
<tr>

<td>-&nbsp;<b>Portes ouvertes ou mal fermées :</b>&nbsp;suivant les modèles de voitures, il peut indiquer quelle porte est ouverte ou mal fermée.</td>
</tr>
<tr>

<td>- Le témoin des feux de position.</td>
</tr>
<tr>

<td>- Le témoin des feux de croisement.</td>
</tr>
<tr>

<td>- Les feux de route.</td>
</tr>
<tr>

<td>- Feux antibrouillard avant.</td>
</tr>
<tr>

<td>- Feux antibrouillard arrière</td>
</tr>
<tr>

<td>- Usure des plaquettes de freins avant.</td>
</tr>
<tr>

<td>- Anti-lock braking system (ABS).</td>
</tr>
<tr>

<td>- Présence d’eau dans le filtre à gazole.</td>
</tr>
</tbody>
</table>
<br><br>
<table cellspacing="5">
<tbody>
<tr>

<td>- Autodiagnostic moteur.</td>
</tr>
<tr>

<td>- Antidémarrage codé.</td>
</tr>
</tbody>
</table>
           </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false">
                <span class="title">Notions mécaniques</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseSeventeen" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
            <p><strong>Moteur :</strong><br>
Appareil transformant différentes formes d’énergie en énergie mécanique, permettant le déplacement d’une automobile. De nos jours la grande majorité des moteurs fonctionnent grâce à un système de pistons qui suit un cycle à 2 ou 4 temps. L’énergie de ces moteurs provient de l’explosion produite par un mélange d’air et d’hydrocarbures.<br><br>

<strong>Boite à vitesse manuelle :</strong><br>
La boite de vitesse automobile sert à démultiplier le mouvement du moteur pour le transmettre aux roues. La première vitesse est la moins démultipliée et la dernière vitesse (quatrième, cinquième ou bien sixième ça dépend du genre de voiture) est la plus démultipliée.<br><br>

<strong>L’embrayage :</strong><br>
L’embrayage fait la liaison entre le moteur et la boite de vitesse. Le système d’embrayage est l’élément mécanique qui permet de transmettre (embrayé) ou de ne pas transmettre (débrayé) la puissance et le couple moteur à la boite de vitesse qui elle même la transmet aux roues. Le débrayage permet de passer les vitesses sans contraintes. Un embrayage est composé d’un mécanisme, d’un disque et d’une butée. Cet ensemble est appelé kit d’embrayage.<br><br>

<strong>Courroie de distribution :</strong><br>
Pièce essentielle dans le fonctionnement d’un moteur, la courroie de distribution doit être changée à des intervalles régulier sous peine de destruction de moteur. Elle transmet le mouvement rotatif du vilebrequin à l’arbre à cames.<br><br>

<strong>LE FREINAGE :</strong><br>
Un système mécanique essentiel pour votre sécurité et celle de vos passagers. Ce système doit répondre efficacement à toutes vos sollicitations. Son efficacité est étroitement liée à l’état d’usure des pneumatiques et des amortisseurs de votre véhicule. Des « garnitures de freins », plaquettes ou mâchoires, trop usées entraînent irrémédiablement la destruction des disques ou des tambours. Nous vous conseillons de Vérifier régulièrement votre système de freinage et de Remplacer votre liquide de freins tous les 2 ans(liquide qui absorbe l’humidité au fil des ans).<br><br>

<strong>Le cylindre :</strong><br>
Comme son nom l’indique, c’est un tube creux. Il est composé d’un acier particulier, et sa surface a subi un traitement qui le rend résistant aux températures élevées, ainsi qu’aux frottements. Il est emboîte dans un bloc moteur.<br><br>

<strong>Le piston :</strong><br>
Pièce en forme de cylindre bougeant dans un tube recevant et transmettant la pression exercée par le carburant. . Il peut être composé de différents matériaux. Le plus courant aujourd’hui est un alliage d’aluminium.<br><br>

<strong>Les bougies :</strong><br>
Les pièces électriques générant des étincelles pour l’allumage d’un moteur à explosion. La bougie tient un rôle clef dans le fonctionnement du moteur de la voiture. Les moteurs d’essence fonctionnent avec des bougies d’allumage, les moteurs diesel fonctionnement avec des bougies de préchauffage.<br><br>

<strong>Les amortisseurs :</strong><br>
Les amortisseurs, en « collant » les pneus à la route, ont pour objet de rendre votre voiture plus confortable et plus sûre à conduire. La suspension d’une voiture influe sur : -Le confort<br>
- La tenue de route en courbe, au freinage ou à l’accélération.<br>
- Les distances de freinage.<br><br>

Les AMORTISSEURS doivent être EN PARFAIT ETAT<br><br>

<strong>L’échappement :</strong><br>
L’échappement auto est un produit de haute technicité qui joue un rôle essentiel dans le confort accoustique et pour la protection de l’environnement. La ligne d’échappement permet de Réduire les bruits des gaz d’échappement, Réduire la vitesse des gaz d’échappement, Réduire la température des gaz d’échappement et Réduire les éléments toxiques contenus dans les gaz d’échappement.<br><br>

<strong>Les segments :</strong><br>
Ils sont fixes autour du piston et font le joint entre celui-ci et le cylindre. Il y en a plusieurs, et chacun remplit une fonction différente, tels que le raclage du surplus d’huile sur le cylindre, ou l’étanchéité entre la chambre de combustion et le carter.<br><br>

<strong>Les filtres :</strong><br>
Il existe trois catégories de filtres : Les filtres à huile, air et carburants:<br>
- Ces filtres protègent votre moteur, prolongent sa durée de vie, et améliorent ses performances.<br>
- Ils filtrent les impuretés internes et externes.<br>
- Il est important et rentable de les vérifier et de les remplacer régulièrement.<br><br>

<strong>Les lubrifiants :</strong><br>
Pour bien rouler, votre voiture a besoin de carburant pour produire de l’énergie, d’air pour pouvoir brûler le carburant dans le moteur et d’ huile pour lubrifier en permanence les pièces en action dans le moteur.<br><br>

<strong>Les soupapes :</strong><br>
Les soupapes sont les éléments qui obstruent l’accès entre le cylindre et la tubulure d’admission (la ou arrivent les gaz frais) ou a la tubulure d’échappement. Les soupapes contrôlent l’entrée et la sortie des gaz dans le cylindre. Elles sont fermées par de forts ressorts et alternativement ouvertes au moment voulu, directement ou indirectement, par des cames montées sur un ou des arbres nommés arbres à cames.<br><br>

<strong>Bielle :</strong><br>
Tige qui transmet le mouvement des pistons au moteur.<br><br>

<strong>Vilebrequin:</strong><br>
C’est ensemble des bielles transformant le mouvement longitudinal du piston en un mouvement rotatif.
</p>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="false">
                <span class="title">Contrôle technique</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseEighteen" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
            <div class="panel-body">
            <p>Toutes les voitures doivent être contrôlées annuellement dès qu’elles ont cinq ans ou plus.<br>
Pour faire le contrôle technique, le conducteur doit s’adresser au centre de visite technique.<br>
Les pièèces demandées : La carte grise du véhicule.<br>
Les taxes annuelles afférentes à la procédure : Entre 120dh et 180dh selon la catégorie de véhicule.</p></div>
            </div>
            </div>
        </div>
       
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="false">
                <span class="title">Le permis international</span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseNineteen" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
                    <div class="panel-body">
                    <p>Pour conduire dans certains pays étrangers, il est impératif d’avoir un permis international. Afin de savoir si c’est le cas dans le pays où vous comptez rendre, vous pouvez notamment vous renseignez auprès des services consulaires du pays concerné.<br>
Pour obtenir un permis international.<br>
Aucune épreuve théorique ni pratique n’est nécessaire, il s’agit d’effectuer une démarche administrative auprès d’une administration nomme Touring Club du Maroc qui se trouve à l’adresse suivante : 3 avenue de l’ Arme Royale -Quartier Sidi Belyout-20000- CASABLANCA’<br>
Les pièces à fournir:<br>
Une photocopie de votre Permis de Conduire Permis marocain permanent<br>
Une Copie de votre CIN marocaine<br>
Une copie de votre passeport<br>
Et une taxe de 360 dh</p></div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--  Footer -->
<?php include('footer.php') ?>
<!-- End Footer -->
<script src="https://kit.fontawesome.com/a91a27e46f.js" crossorigin="anonymous"></script>
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</body>
</html>