<!-- Mikrodatamarkering tilføjet af Google Markeringsværktøj til strukturerede data. -->
<!--Include head-->
<?php
      include("./include/header.php");
    ?>
  <title>Hjem</title>
  <meta name="keywords" content="hypnose, klinisk hypnose, hypnotisør, mindfulness, krystalhealing, ro, afslapning, sind, forebygge, helbrede, bekæmpe, tandlægekræk, eksamensangst, vægttab, spiseforstyrrelse, smerte, anbefalinger, videnskablig dokumentation, selvværd, trance, Ll. Grummesgaard, lille grummesgaard, nissum, nørre nissum, nr nissum, lemvig, tvedvej, vestjylland, Anne Kristine Lomholt Hansen, Stine Lomholt Hansen "
  />
  <meta name="description" content="Velkommen til Ll. Grummesgaard ved Stine Lomholt Hansen. Her kan du få hjælp til at forebygge eller helbrede dit problem ved hjælp af klinisk hypnose, mindfulness og/eller krystalhealing i private og rolige omgivelser"
  />

  </head>

  <body>
    <!--Include navigation-->
    <?php
      include("./include/navigation.php");
    ?>
      <!--Forside-->
      <div itemscope itemtype="http://schema.org/LocalBusiness" class="wrapper">
        <!--Gif til mobil-->
        <img itemprop="image" id="gif" src="./images/cinemagraphic.gif" alt="Blafrende lys" />
        <!--Video til tablet og desktop-->
        <section id="videowrap">
          <video id="video" autoplay="" loop="">
            <source src="./video/forsidevideo.mp4" type="video/mp4"> 
            <source src="./video/forsidevideoipad.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <a href="#anbefaling" class="anbefaling-knap" id="anbefaling-home2">Anbefalinger</a>
        </section>
        <!--Velkomsttest til mobil-->
        <div id="velkomst">
          <h1>Velkommen til
            <span itemprop="name">Lille Grummesgaard</span></h1>
          <p>Jeg tilbyder klinisk hypnose, krystalhealing og mindfulness i personlige idylliske omgivelser</p>
          <p>
            <span itemprop="email"><a href="./kontakt.php">Kontakt mig</a> i</span> dag, så vi sammen kan finde den helt
            rette behandling for dig.</p>
        </div>
        <br>
        <a href="#anbefaling" class="anbefaling-knap" id="anbefaling-home">Anbefalinger</a>

        <!--Anbefalings-sektion med carousel fra https://www.w3schools.com/bootstrap/bootstrap_carousel.asp -->
        <section id="anbefaling">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="./images/Lousie1.png" alt="Anmeldelse af Louise: Jeg oplever Stine som et varmt og kærligt menneske, som er god til at lytte. Hun lukker folk ind i sit hjem, som skaber en afslappet stemning"
                  style="width:100%;">
              </div>

              <div class="item">
                <img src="./images/Ditte1.png" alt="Anmeldese af Ditte: Hvis jeg møder en, som mangler ro i sit liv, så vil jeg anbefale Stine, for det er hun god til at formidle"
                  style="width:100%;">
              </div>

              <div class="item">
                <img src="./images/Alice1.png" alt="Anmeldelse af Alice: Stine er en meget seriøst og grundig behandler. Hun skaber tryghed"
                  style="width:100%;">
              </div>

              <div class="item">
                <img src="./images/Kasper1.png" alt="Anmeldelse af Kasper: Behandlingen jeg fik vha. mindfulness har hjulpet mig rigtig meget! Det har givet mig nogle gode redskaber til at styrke min psyke"
                  style="width:100%;">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
          </div>
      </div>

  </body>

  </html>

  <!--Include footer-->
  <?php
      include("./include/footer.php");
?>
    <!--JavaScript til scroll-funktion til navigation-->
    <script src="./js/scroll.js"></script>




    </body>

    </html>