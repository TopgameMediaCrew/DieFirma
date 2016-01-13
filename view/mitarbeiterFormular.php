<?php

include './header.php';
?>

<script type="text/javascript" src="./js/clickListener.js"></script>

<div id='cssmenu'>
    <ul>
        <li class='active'><a href='#'><span>Mitarbeiter</span></a></li>
        <table border="1">
            <thead>

            </thead>
            <tbody>
                <tr>
                    <th>ID</th>
                    <th><input type="text" name="ID" value="" /></th>
                </tr>
                <tr>
                    <th>Vorname</th>
                    <th><input type="text" name="Vorname" value="" /></th>
                </tr>
                <tr>
                    <th>Nachname</th>
                    <th><input type="text" name="Nachname" value="" /></th>
                </tr>
                <tr>
                    <th>Geschlecht</th>
                    <th>männlich<input type="radio" name="sex" value="m" />weiblich<input type="radio" name="sex" value="w" /></th>
                </tr>
                <tr>
                    <th>Geburtsdatum</th>
                    <th><input type="date" name="Geburtsdatum" value="" /></th>
                </tr>
                <tr>
                    <th>Abteilung</th>
                    <th><select name="Abteilung">
                            <option>Abteilung 1</option>
                            <option>Abteilung 2</option>
                        </select></th>
                </tr>
                <tr>
                    <th>Stundenlohn</th>
                    <th><input type="number" step=0.01 name="Stundenlohn" value="" /></th>
                </tr>
                <tr>
                    <th>Vorgesetzer</th>
                    <th><input type="text" name="Vorgesetzer" value="" /></th>
                </tr>

                <tr>
                    <td colspan="2" align="center"><input type="submit" value="OK" /></td>
                </tr>
            </tbody>
        </table>

    </ul>
</div>


<?php

include './footer.php';
?>