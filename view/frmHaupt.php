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
         <li class='last'><a class="menuItem" id="MitarbeiterNeuAnlegen" href='#'><span>neu Anlegen</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#' id="Abteilungen"><span>Abteilungen</span></a>
      <ul>
         <li><a class="menuItem" href='#' id="AbteilungAnzeigen"><span>Anzeigen</span></a></li>
         <li class='last'><a class="menuItem" href='#' id="AbteilungNeuAnlegen"><span>neu Anlegen</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#' id="Fuhrpark"><span>Fuhrpark</span></a>
      <ul>
         <li><a class="menuItem" href='#' id="FuhrparkAnzeigen"><span>Anzeigen</span></a></li>
         <li class='last'><a class="menuItem" href='#' id="FuhrparkNeuAnlegen"><span>neu Anlegen</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#' id="Projekte"><span>Projekte</span></a>
      <ul>
         <li><a class="menuItem" href='#' id="ProjekteAnzeigen"><span>Anzeigen</span></a></li>
         <li class='last'><a class="menuItem" href='#' id="ProjekteNeuAnlegen"><span>neu Anlegen</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#' id="MitarbeiterToProjekt"><span>Mitarbeiter zu Projekt</span></a>
      <ul>
         <li><a class="menuItem" href='#' id="MitarbeiterToProjektAnzeigen"><span>Anzeigen</span></a></li>
         <li class='last'><a class="menuItem" href='#' id="MitarbeiterToProjektNeuAnlegen"><span>neu Anlegen</span></a></li>
      </ul>
   </li>
   <li class='last'><a href='#' id="Contact"><span>Contact</span></a></li>
</ul>
</div>

<!--<button type="button" id="btnEingabe" name="btnEingabe" value="Eingabe">Eingabe</button>-->

<?php
    include './view/footer.php';
?>