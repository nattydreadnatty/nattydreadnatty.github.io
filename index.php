<!--TODO: COMMENTER LE CODE -->
<!--TODO: ADD PAGE PRESTATIONS -->
<!--TODO: ADD PAGE A PROPOS -->
<!--TODO: ADD PAGE CONTACT ME -->
<!--TODO: REALISATIONS -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content=""/>
    <meta name="keywords" content="mot-clé 1, mot-clé 2, mot-clé 3"/>
    <meta name="author" content="nom de l’auteur" />
    <meta name="copyright" content="propriétaire du copyright" />
    <meta name="robots" content="index"/> <!-- Pour autoriser l’indexation d’une page dans un moteur de recherche, utilisez la balise méta suivante : / Etant donné que l’indexation de pages Web correspond au comportement standard des robots d’indexation, cette donnée est en général inutile.  -->
    <meta name="robots" content="noindex"/><!-- L’attribut « robot » se destine à tous les robots d’indexation des moteurs de recherche. L’attribut « noindex » contient l’information qui permet de bloquer les indexations. Interdire une indexation seulement pour quelques robots est possible en choisissant un nom d’attribut différent tel que « googlebot ».  -->
    <meta name="robots" content="follow"/><!-- Cette balise méta est à la base redondante étant donné que le robot d’indexation des principaux moteurs de recherche suit toujours les hyperliens dès lors que rien d’autre n’est spécifié.  -->
    <meta name="robots" content="nofollow"/><!-- Les robots d’indexations traitent la page Web comme si les liens éventuels n’existaient pas. Les éléments méta n’empêchent pourtant pas les robots de recherche de transmettre les contenus des fichiers HTML à la base de données.  -->
    <meta http-equiv="cache-control" content="no-cache"/> <!-- Les pages Web dotées de cette balise doivent être chargées à chaque demande de page. Cela ralentit le téléchargement de la page mais cela peut être également pertinent si le contenu d’une page Web change constamment.  -->
    <meta http-equiv="expires" content="date d’expiration en secondes"/> <!-- Voici les pages HTML qui peuvent être affectées par des balises méta. Une fois la période de temps définie, le navigateur doit charger les documents HTML de l’adresse d’origine. Si les contenus sont chargés à partir de cette page,  une date d’expiration est sélectionnée à partir de 0 secondes. Après 12 heures, les administrateurs de sites Internet sélectionnent en conséquence 43 200 secondes. -->
    <meta http-equiv="expires" content="Sat, 07 Feb 2016 00:00:00 GMT"/>
    <meta http-equiv="refresh" content=""/> <!-- Etant donné que la balise méta Refresh ne fonctionne pas sous certains paramètres de navigateurs, le World Wide Web Consortium (W3C, organisme de standardisation des techniques) conseille une implémentation côté serveur grâce au code HTML 301 plutôt qu’un transfert via une balise méta.  -->
    <title></title>
    <link rel="stylesheet" href="./includes/css/reset.css">
    <link rel="stylesheet" href="./includes/css/style.css">
    <!-- TODO: <link rel="stylesheet" href="./includes/css/animation-lamouche.css"> -->
    <link rel="stylesheet" href="./includes/css/toggle-menu.css">
    <link rel="stylesheet" href="./includes/css/animation-toggle-menu.css">
    <link rel="stylesheet" href="./includes/css/animation-index.css">
    <link rel="stylesheet" href="./includes/css/footer.css">
    <link rel="stylesheet" href="./includes//css/animation-footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&family=Anton&family=Amatic+SC:wght@400;700&family=PT+Sans&family=Quicksand:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
</head>
<body id="homepage">
    <header>
        <!------------------------------------------------------- NAVIGATION TABLETTE ---------------------------------------------------------------------->
        
        <!------------------------------------------------------- NAVIGATION DESKTOP ---------------------------------------------------------------------->
    </header>
    <!--------------------------------------------------------------------- MAIN ------------------------------------------------------------------------------>
    <main>
        
        <?php // TODO: include_once('./includes/intro.html'); ?>
        
        <div id="main-content">
            <div id="toggle-menu">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" >
                    <defs>
                      <style>
                        .toggle-menu {
                          fill: #342e37;
                        }
                      </style>
                    </defs>
                    <g>
                        <a href="index.html"><circle id="Ellipse_1" data-name="Ellipse 1" class="toggle-menu" cx="11" cy="8" r="8"/></a>
                        <a href="index.html"><circle id="Ellipse_2" data-name="Ellipse 2" class="toggle-menu" cx="11" cy="28" r="8"/></a>
                        <a href="index.html"><circle id="Ellipse_3" data-name="Ellipse 3" class="toggle-menu" cx="11" cy="48" r="8"/></a>
                        <a href="index.html"><circle id="Ellipse_4" data-name="Ellipse 4" class="toggle-menu" cx="11" cy="68" r="8"/></a>
                        <a href="index.html"><circle id="Ellipse_5" data-name="Ellipse 5" class="toggle-menu" cx="11" cy="88" r="8"/></a>
                    </g>
                  </svg>  
            </div>
            <div id="menu-items-container">
                <a id="accueil" class="menu-item" href="index.html">ACCUEIL</a>  
                <a id="a-propos" class="menu-item" href="index.html">A PROPOS</a>  
                <a id="realisations" class="menu-item" href="index.html">REALISATIONS</a>  
                <a id="prestations" class="menu-item" href="index.html">PRESTATIONS</a>  
                <a id="contact" class="menu-item" href="index.html">CONTACT</a> 
            </div>
            <div id="top-content">
                <div id="accroche">
                    <h1 id="accroche-title"><span class="first-letter">W</span><span class="accroche-span">ebDesigner & Développeuse Full Stack</span></h1>
                    <div id="accroche-content-container-back">
                        <div id="accroche-borders"></div>
                    </div>
                    <div id="accroche-content-container">
                        <div id="freelance">
                            <h3>Freelance</h3>
                        </div>
                        <div id="pssst">
                            <div id="pssst-background">
                                <img src="includes/images/pssst-background.svg" alt="background jaune" />
                            </div>
                            <div id="pssst-title">
                                <h4>PSSST... NE CHERCHE PLUS... TU ES AU BON ENDROIT !</h4>
                            </div>
                        </div>
                        <div id="accroche-flex-container">
                          <div id="accroche-content-question">
                            <img src="includes/images/question.svg" alt="point d'interrogation" />
                          </div>
                          <div id="accroche-content">
                              <div id="accroche-content-background">
                                  <img src="includes/images/accroche-background.svg" alt="background jaune" />
                              </div>
                              <div id="accroche-content-title">
                                  <h2>Besoin de visibilité</h2>
                                  <h3>Pour booster ton business</h3>
                              </div>
                              <p>
                                  Tu t'apprêtes à donner vie à <span class="bold">ton projet</span>, mais l’univers de la communication est un mystère pour toi et tu ne sais pas par où commencer ? Tu viens de <span class="bold">démarrer ton activité</span> et tu souhaites <span class="bold">augmenter ta visibilité</span> pour attirer tes premiers clients ? Tu as <span class="bold">besoin d'une application spécifique</span> aux besoins de ton entreprise?
                                  <br/><br/>
                                  Bonne nouvelle ! Tu as suivi le bon url !
                                  <br/><br/>
                                  <span class="bold">Logo</span>, <span class="bold">outils de communication papier</span>, <span class="bold">supports web</span>, <span class="bold">site internet</span>, <span class="bold">application mobile ou desktop</span>, je suis là pour répondre à tes besoins avec une proposition parfaitement adaptée !
                              </p>
                          </div>
                        </div>
                        <div id="accroche-cta">
                            <a href="" >EN SAVOIR PLUS</a>
                        </div>
                        <div id="lm-logo">
                            <img src="includes/images/LaMouche-Logo.svg" alt="LaMouche Logo" />
                        </div>
                    </div>
                </div>
                <div id="words" >
                    <?php include_once('./includes/words-illus.html'); ?>

                    <div id="rouage-illust" >
                      
                    </div>                   
                </div>
            </div>
            <div id="hidden-content">
              <div id="animation-container">
                <div id="about-me-container">
                  <div id="picture">
                    <img src="./includes/images/visu-fred.svg" alt="Photo de moi - Fred" />
                  </div>
                  <div id="background">
                    <img src="./includes/images/back-visu-fred.svg" alt="Background jaune" />
                  </div>
                </div>
                <div id="about-me-text-container">
                  <div id="about-me-wrapper">
                    
                  </div>
                  <div id="about-me-text">
                    <p>
                      Salut et bienvenue ! Passionnée par l’univers du web, je dédie une grande partie de mon temps à développer de nouvelles compétences et m’informer des nouvelles tendances.
                      <br/><br/>
                      Entre WebDesign et Développement d'applications mon coeur balance. 
                      <br/><br/>
                      Et comme, pour moi, l'un ne va pas sans l'autre, j'ai décidé de faire les deux!
                      <br/><br/>
                      Le reste du temps ? Et bien je le passe en famille... Au programme bricolage,  et bien sûr comme toute bonne geek qui se respecte... Une petite dose de gaming...
                    </p>
                  </div>
                </div>
                <div id="lamouche-screen-container">
                  <div id="rouage-illust-screen" >
                    <img id="rouage-screen" src="includes/images/rouage.svg" alt="rouage" />
                  </div>  
                  <div id="qui-1" >
                      <img src="includes/images/lamouche-screen-part1.svg" alt="LaMouche Logo" />
                  </div>
                  <div id="qui-2" >
                      <img src="includes/images/lamouche-screen-part2.svg" alt="LaMouche Logo" />
                  </div>
                </div>
            </div>
            <div id="about-cta-container">
              <div id="button">                      
                <div id="about-cta" class="flex-gap">
                  <a href="" >A PROPOS</a>
                </div>
              </div>
            </div>

              <div id="mid-content">
                <div id="web-container">
                  <div id="visu-web">
                    <img src="./includes/images/visu-web.png" alt="visuel webdesign" />
                  </div>
                  <div id="text-web">
                    <H2 class="flex-gap">Création de Sites Web</H2>
                    <p class="flex-gap">
                      De la conception à la mise en ligne, en passant par la création des visuels, je prends en charge toutes les étapes de création de votre site internet.
                      <Br/><Br/>
                      Mes atouts pour mener à bien cette responsabilité: mes qualités d'écoute et d'analyse, ma détermination et ma créativité.
                    </p>
                    <div id="webdesign-cta" class="flex-gap">
                      <a href="" >DECOUVRIR</a>
                    </div>
                  </div>
                </div>
                <div id="dev-container">
                  <div id="visu-dev">
                    <img src="./includes/images/dev-visu.png" alt="visuel développement applications" />
                  </div>
                  <div id="text-dev">
                    <H2 class="flex-gap">Développement d'Applications Desktop et Mobile</H2>
                    <p class="flex-gap">
                      Javascript, PHP, Node.JS, Nest, Angular, Python, Java, SQl,...
                      <Br/><Br/>
                      Je dispose de toutes les compétences nécessaires pour développer l'application dont vous avez besoin.
                    </p>
                    <div id="dev-cta" class="flex-gap">
                      <a href="" >DEMOS EN LIGNE</a>
                    </div>
                  </div>
                </div>
                <div id="print-container">
                  <div id="visu-print">
                    <img src="./includes/images/visu-print.png" alt="visuel print" />
                  </div>
                  <div id="text-print">
                    <H2 class="flex-gap">Création Visuels Print et Web</H2>
                    <p class="flex-gap">
                      Bien communiquer est un art... 
                      <Br/><Br/>
                      Flyers, cartes de visites, brochures, documents techniques, chartes graphiques, dossiers de conception, Branding, Logos...
                      <Br/><Br/>
                      Je mets mon savoir faire à votre service pour réaliser les visuels qui vous correspondent.
                    </p>
                    <div id="print-cta" class="flex-gap">
                      <a href="" >PORTFOLIO</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
    <!-------------------------------------------------------------------- FOOTER ----------------------------------------------------------------------------->
    <?php include_once('./includes/footer.php'); ?>

    <!---------------------------- MENU BURGER SCRIPT --------------------------------->
    <script type="text/javascript" src="./includes/js/burger.js"></script>

    <!---------------------------- MENU BURGER ANIM --------------------------------->
    <script type="text/javascript" src="./includes/js/anim-burger.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <!--paroller.js-->
    <script src="includes/dist/jquery.paroller.js"></script>
    <!---------------------------- WORDS SVG ANIM --------------------------------->
    <script type="text/javascript" src="./includes/js/my-paroller.js"></script>

    <!---------------------------- MENU BURGER SCRIPT --------------------------------->
    <script type="text/javascript" src="./includes/js/screen-controller.js"></script>

    <!--
    <script>
      var screenContainer = document.querySelector("#lamouche-screen-container");
      var screenPart1 = document.querySelector("#qui-1");
      var screenPart2 = document.querySelector("#qui-2");

      screenContainer.addEventListener("mouseover", addClass, false);

      function addClass() {
        screenPart1.setAttribute("class", "mega my-element");
        screenPart1.setAttribute("data-paroller-factor", "1");
        screenPart1.setAttribute("data-paroller-factor-lg", "0.4");
        screenPart1.setAttribute("data-paroller-factor-md", "0.3");
        screenPart1.setAttribute("data-paroller-factor-sm", "-0.2");
        screenPart1.setAttribute("data-paroller-factor-xs", "-0.1");
        screenPart1.setAttribute("data-paroller-type", "foreground");
        screenPart1.setAttribute("data-paroller-direction", "horizontal");
        screenPart1.setAttribute("data-paroller-transition", "transform 0s linear");

        screenPart2.setAttribute("class", "mega my-element");
        screenPart2.setAttribute("data-paroller-factor", "-1");
        screenPart2.setAttribute("data-paroller-factor-lg", "0.4");
        screenPart2.setAttribute("data-paroller-factor-md", "0.3");
        screenPart2.setAttribute("data-paroller-factor-sm", "-0.2");
        screenPart2.setAttribute("data-paroller-factor-xs", "-0.1");
        screenPart2.setAttribute("data-paroller-type", "foreground");
        screenPart2.setAttribute("data-paroller-direction", "horizontal");
        screenPart2.setAttribute("data-paroller-transition", "transform 0s linear");
      }
    </script>
    -->
</body>
</htmL>

