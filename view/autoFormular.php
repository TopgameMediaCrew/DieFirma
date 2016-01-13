<?php

include './header.php';
?>

<script type="text/javascript" src="./js/clickListener.js"></script>

<div id='cssmenu'>
    <ul>
        <li class='active'><a href='#'><span>Auto</span></a></li>
        <table border="1">
            <thead>

            </thead>
            <tbody>
                <tr>
                    <th>Hersteller</th>
                    <th><select name="Hersteller">
                            <option>Hersteller 1</option>
                            <option>Hersteller 2</option>
                        </select></th>
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