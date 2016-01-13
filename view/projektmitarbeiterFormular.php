<?php

include './header.php';
?>

<script type="text/javascript" src="./js/clickListener.js"></script>

<div id='cssmenu'>
    <ul>
        <li class='active'><a href='#'><span>Mitarbeiter dem Projet zuteilen</span></a></li>
        <table border="1">
            <thead>

            </thead>
            <tbody>
                <tr>
                    <th>Projekt</th>
                    <th><select name="Projekt">
                            <option>Projekt 1</option>
                            <option>Projekt 2</option>
                        </select></th>
                </tr>
                <tr>
                    <th>von</th>
                    <th><input type="datetime" name="Vorname" value="" /></th>
                </tr>
                <tr>
                    <th>bis</th>
                    <th><input type="text" name="Nachname" value="" /></th>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="ok" /></td>
                </tr>
            </tbody>
        </table>

    </ul>
</div>


<?php

include './footer.php';
?>