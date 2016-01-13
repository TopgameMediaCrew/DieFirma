<?php
    include './view/header.php';
?>

<script type="text/javascript" src="./js/clickListener.js"></script>

<div id='cssmenu'>
<ul>
   <li class='active'><a href='' id="Home"><span>Home</span></a></li>
   <li class='has-sub'><a href='#' id="Mitarbeiter"><span>Mitarbeiter</span></a>
      <ul>
         <li><a class="menuItem" href='#' id="MitarbeiterAnzeige"><span>Anzeigen</span></a></li>
         <li><a class="menuItem" href='#' id="MitarbeiterBearbeiten"><span>Bearbeiten</span></a></li>
         <li><a class="menuItem" href='#' id="MitarbeiterNeuAnlegen"><span>neu Anlegen</span></a></li>
         <li class='last'><a class="menuItem" id="MitarbeiterSuchen" href='#'><span>Suchen</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#' id="Abteilungen"><span>Abteilungen</span></a>
      <ul>
         <li><a class="menuItem" href='#' id="AbteilungAnzeigen"><span>Anzeigen</span></a></li>
         <li><a class="menuItem" href='#' id="AbteilungBearbeiten"><span>Bearbeiten</span></a></li>
         <li class='last'><a class="menuItem" href='#' id="AbteilungNeuAnlegen"><span>neu Anlegen</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#' id="Fuhrpark"><span>Fuhrpark</span></a>
      <ul>
         <li><a class="menuItem" href='#' id="FuhrparkAnzeigen"><span>Anzeigen</span></a></li>
         <li><a class="menuItem" href='#' id="FuhrparkBearbeiten"><span>Bearbeiten</span></a></li>
         <li class='last'><a class="menuItem" href='#' id="FuhrparkAusleihe"><span>Ausleihe</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#' id="Projekte"><span>Projekte</span></a>
      <ul>
         <li><a class="menuItem" href='#' id="laufendeProjekte"><span>laufende Projekte</span></a></li>
         <li class='last'><a class="menuItem" href='#' id="abgeschlosseneProjekte"><span>abgeschlossene Projekte</span></a></li>
      </ul>
   </li>
   <li class='last'><a href='#' id="Contact"><span>Contact</span></a></li>
</ul>
</div>

<!--<button type="button" id="btnEingabe" name="btnEingabe" value="Eingabe">Eingabe</button>-->

<?php
    include './view/footer.php';
?>