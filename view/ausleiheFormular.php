<?php

include './header.php';
?>

<script type="text/javascript" src="./js/clickListener.js"></script>

<div id='cssmenu'>
    <ul>
        <li class='active'><a href='#'><span>Ausleihe</span></a></li>
        <table border="1">
            <thead>

            </thead>
            <tbody>
                <tr>
                    <th>Auto</th>
                    <th><select name="Auto">
                            <option>Auto 1</option>
                            <option>Auto 2</option>
                        </select></th>
                </tr>
                <tr>
                    <th>Mitarbeiter</th>
                    <th><select name="Mitarbeiter">
                            <option>Mitarbeiter 1</option>
                            <option>Mitarbeiter 2</option>
                        </select></th>
                </tr>
                <tr>
                    <th>von</th>
                    <th><input type="datetime" name="von" value="" /></th>
                </tr>

                <tr>
                    <th>bis</th>
                    <th><input type="datetime" name="von" value="" /></th>
                </tr>
            </tbody>
        </table>

    </ul>
</div>


<?php

include './footer.php';
?>