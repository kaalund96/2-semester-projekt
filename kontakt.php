<!--Include head-->
<?php
      include("./include/header.php");
    ?>
  <title>Kontakt</title>
  <meta name="keywords" content="hypnose, klinisk hypnose, hypnotisør, mindfulness, krystalhealing, ro, afslapning, sind, kontakt, telefonnummer, email, adresse, kontaktformular, google maps, kort, mobilnummer, kontakt mig, Ll. Grummesgaard, lille grummesgaard, nissum, nørre nissum, nr nissum, lemvig, tvedvej, vestjylland, Anne Kristine Lomholt Hansen, Stine Lomholt Hansen "
  />
  <meta name="description" content="Find kontaktoplysninger på Ll. Grummesgaard eller kontakt mig igennem kontaktformularen."
  />

  </head>

  <body>
    <!--Include navigation-->
    <?php
      include("./include/navigation.php");
    ?>
      <div class="wrapper-kontakt">
        <!--Kontaktinformationer og kort-->
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <section id="kort">
              <h2>Kontakt</h2>
              <p class="bold">Adresse:</p>
              <p>Tvedvej 44</p>
              <p>7620 Lemvig</p>
              <br>
              <p><span class="bold">Tlf. Nummer:</span> +4520911739</p>
              <p><span class="bold">CVR:</span> 37089117</p>
              <br>
            </section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2199.381570570232!2d8.39724131531423!3d56.54728893790387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464a2429d9c34879%3A0x15de49f4bc6af4db!2sTvedvej+44%2C+7620+Lemvig!5e0!3m2!1sda!2sdk!4v1495806196222" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <!--Kontaktformular-section-->
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <section id="formular">
              <h2>Skriv til mig</h2>
              <!-- php contact formular  -->
              <form action="./include/kontaktformular.php" method="POST">
                <input type="text" class="formular-svar" name="navn" placeholder="Navn">
                <input type="text" class="formular-svar" name="email" placeholder="Email">

                <p>Vælg pakke eller Spørgsmål</p>
                <select name="emne" class="formular-svar" size="1">
    <option value="Spørgsmål">Spørgsmål</option>
    <option value="Krystalhealing">Krystalhealing</option>
    <option value="Hypnosebehandling til vægttab">Hypnosebehandling til vægttab</option>
    <option value="MBKT-terapi">MBKT-terapi</option>
    <option value="Hypnosebehandling">Hypnosebehandling</option>
    <option value="Tandbehandling hypnose">Tandbehandling hypnose</option>
    <option value="MBKT mindfulnesss intro">MBKT mindfulnesss intro</option>
    <option value="Eksamens pakken">Eksamens pakken</option>
    <option value="Du og jeg">Du og jeg</option>
    <option value="Mindfulness instruktionsforløb">Mindfulness instruktionsforløb</option>
    <option value="Intro til den gamle hjerne">Intro til den gamle hjerne</option>
    <option value="Fælles meditation">Fælles meditation</option>
    <option value="Besøgshest">Besøgshest</option>
    </select>
                <br/>

                <textarea id="formular-text" name="besked" rows="6" cols="25" placeholder="Skriv besked"></textarea>
                <br>
                <input id="sendknap" class="kontaktknap" type="submit" value="Send">
                <input id="resetknap" class="kontaktknap" type="reset" value="Clear">
              </form>
            </section>
          </div>
        </div>
      </div>
      <!--Include footer-->
      <?php
      include("./include/footer.php");
    ?>

  </body>

  </html>