<?php
    include './view/header.php';
?>

<script type="text/javascript" src="./js/clickListener.js"></script>

<div id='cssmenu'>
<ul>
   <li class='active'><a href='#' id="Home"><span>Home</span></a></li>
   <li class='has-sub'><a href='#' id="Mitarbeiter"><span>Mitarbeiter</span></a>
      <ul>
         <li><a class="menuItem" href='#' id="Anzeige"><span>Anzeigen</span></a></li>
         <li><a class="menuItem" href='#' id="Bearbeiten"><span>Bearbeiten</span></a></li>
         <li><a class="menuItem" href='#' id="neuAnlegen"><span>neu Anlegen</span></a></li>
         <li class='last'><a class="menuItem" id="Suchen" href='#'><span>Suchen</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#' id="Abteilungen"><span>Abteilungen</span></a>
      <ul>
         <li><a class="menuItem" href='#' id="Test1"><span>Test1</span></a></li>
         <li><a class="menuItem" href='#' id="Test2"><span>Test2</span></a></li>
         <li class='last'><a class="menuItem" href='#' id="Test3"><span>Test3</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#' id="Fuhrpark"><span>Fuhrpark</span></a>
      <ul>
         <li><a class="menuItem" href='#' id="Anzeigen"><span>Anzeigen</span></a></li>
         <li><a class="menuItem" href='#' id="Bearbeiten"><span>Bearbeiten</span></a></li>
         <li class='last'><a class="menuItem" href='#' id="Ausleihe"><span>Ausleihe</span></a></li>
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