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
                    <th>Hersteller</th>
                    <th><input type="text" name="Hersteller" value="" /></th>
                </tr>
                <tr>
                    <th>Modell</th>
                    <th><input type="text" name="Modell" value="" /></th>
                </tr>
                <tr>
                    <th>Kennzeichen</th>
                    <th><input type="text" name="Kennzeichen" value="" /></th>
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