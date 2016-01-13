<?php
    include './view/header.php';
?>

<script type="text/javascript" src="./js/clickListener.js"></script>

<div id='cssmenu'>
<ul>
   <li class='active'><a href='#'><span>Home</span></a></li>
   <li class='has-sub'><a href='#'><span>Mitarbeiter</span></a>
      <ul>
         <li><a href='#'><span>Anzeigen</span></a></li>
         <li><a href='#'><span>Bearbeiten</span></a></li>
         <li><a href='#'><span>neu Anlegen</span></a></li>
         <li class='last'><a href='#'><span>Suchen</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Abteilungen</span></a>
      <ul>
         <li><a href='#'><span>Test1</span></a></li>
         <li class='last'><a href='#'><span>Test2</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Fuhrpark</span></a>
      <ul>
         <li><a href='#'><span>Anzeigen</span></a></li>
         <li><a href='#'><span>Bearbeiten</span></a></li>
         <li class='last'><a href='#'><span>Ausleihe</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Projekte</span></a>
      <ul>
         <li><a href='#'><span>laufende Projekte</span></a></li>
         <li class='last'><a href='#'><span>abgeschlossene Projekte</span></a></li>
      </ul>
   </li>
   <li class='last'><a href='#'><span>Contact</span></a></li>
</ul>
</div>


<?php
    include './view/footer.php';
?>
